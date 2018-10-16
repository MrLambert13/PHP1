"use strict";

/**
 * @property {Object} settings Объект с настройками галереи.
 * @property {string} settings.previewSelector Селектор обертки для миниатюр галереи.
 * @property {string} settings.openedImageWrapperClass Класс для обертки открытой картинки.
 * @property {string} settings.openedImageClass Класс открытой картинки.
 * @property {string} settings.openedImageScreenClass Класс для ширмы открытой картинки.
 * @property {string} settings.openedImageCloseBtnClass Класс для картинки кнопки закрыть.
 * @property {string} settings.openedImageCloseBtnSrc Путь до картинки кнопки открыть.
 * @property {string} setting.openedNoImage Путь до картинки-заглушки
 */
const gallery = {
  settings: {
    previewSelector: '.mySuperGallery',
    openedImageWrapperClass: 'galleryWrapper',
    openedImageClass: 'galleryWrapper__image',
    openedImageScreenClass: 'galleryWrapper__screen',
    openedImageCloseBtnClass: 'galleryWrapper__close',
    openedImageCloseBtnSrc: '../img/close.png',
  },

  /**
   * Инициализирует галерею, ставит обработчик события.
   * @param {Object} userSettings Объект настроек для галереи.
   */
  init(userSettings = {}) {
    // Записываем настройки, которые передал пользователь в наши настройки.
    Object.assign(this.settings, userSettings);

    //get and save NodeList with image which have 'data-full_image_url' atribut
    this.imageCollections = document.querySelectorAll('[data-full_image_url]');

    // Находим элемент, где будут превью картинок и ставим обработчик на этот элемент,
    // при клике на этот элемент вызовем функцию containerClickHandler в нашем объекте
    // gallery и передадим туда событие MouseEvent, которое случилось.
    document
      .querySelector(this.settings.previewSelector)
      .addEventListener('click', event => this.containerClickHandler(event));
  },

  /**
   * Обработчик события клика для открытия картинки.
   * @param {MouseEvent} event Событие клики мышью.
   * @param {HTMLElement} event.target Целевой объект, куда был произведен клик.
   */
  containerClickHandler(event) {
    // Если целевой тег не был картинкой, то ничего не делаем, просто завершаем функцию.
    if (event.target.tagName !== 'IMG') {
      return;
    }
    // Открываем картинку с полученным из целевого тега (data-full_image_url аттрибут).
    this.openImage(event.target.dataset.full_image_url);

  },

  /**
   * Открывает картинку.
   * @param {string} src Ссылка на картинку, которую надо открыть.
   */
  openImage(src) {
    //is open image in the image collections or not
    for (const idx in Object.keys(this.imageCollections)) {
      if (this.imageCollections[idx].dataset.full_image_url === src) {
        this.openedImageCurrent = src;
      }
    }

    // Получаем контейнер для открытой картинки, в нем находим тег img и ставим ему нужный src.
    this.getScreenContainer().querySelector(`.${this.settings.openedImageClass}`).src = src;
  },

  /**
   * Возвращает контейнер для открытой картинки, либо создает такой контейнер, если его еще нет.
   * @returns {Element}
   */
  getScreenContainer() {
    // Получаем контейнер для открытой картинки.
    const galleryWrapperElement = document.querySelector(`.${this.settings.openedImageWrapperClass}`);
    // Если контейнер для открытой картинки существует - возвращаем его.
    if (galleryWrapperElement) {
      return galleryWrapperElement;
    }

    // Возвращаем полученный из метода createScreenContainer контейнер.
    return this.createScreenContainer();
  },

  /**
   * Создает контейнер для открытой картинки.
   * @returns {HTMLElement}
   */
  createScreenContainer() {

    // Создаем сам контейнер-обертку и ставим ему класс.
    const galleryWrapperElement = document.createElement('div');
    galleryWrapperElement.classList.add(this.settings.openedImageWrapperClass);

    // Создаем контейнер занавеса, ставим ему класс и добавляем в контейнер-обертку.
    const galleryScreenElement = document.createElement('div');
    galleryScreenElement.classList.add(this.settings.openedImageScreenClass);
    galleryWrapperElement.appendChild(galleryScreenElement);

    // Создаем картинку для кнопки закрыть, ставим класс, src и добавляем ее в контейнер-обертку.
    const closeImageElement = new Image();
    closeImageElement.classList.add(this.settings.openedImageCloseBtnClass);
    closeImageElement.src = this.settings.openedImageCloseBtnSrc;
    closeImageElement.addEventListener('click', () => this.close());
    galleryWrapperElement.appendChild(closeImageElement);

    // Создаем картинку, которую хотим открыть, ставим класс и добавляем ее в контейнер-обертку.
    const image = new Image();
    image.onerror = () => this.openImage(this.settings.openedNoImage);

    image.classList.add(this.settings.openedImageClass);
    galleryWrapperElement.appendChild(image);

    const arrowLeft = new Image();
    arrowLeft.classList.add(this.settings.openedArrowClass, this.settings.openedLeftArrowClass);
    arrowLeft.src = this.settings.openedLeftArrow;
    galleryWrapperElement.appendChild(arrowLeft);
    arrowLeft.addEventListener('click', () => this.leftClick());
    const arrowRight = new Image();
    arrowRight.classList.add(this.settings.openedArrowClass, this.settings.openedRightArrowClass);
    arrowRight.src = this.settings.openedRightArrow;
    galleryWrapperElement.appendChild(arrowRight);
    arrowRight.addEventListener('click', () => this.rightClick());

    // Добавляем контейнер-обертку в тег body.
    document.body.appendChild(galleryWrapperElement);

    // Возвращаем добавленный в body элемент, наш контейнер-обертку.
    return galleryWrapperElement;
  },

  /**
   * Open previous image
   */
  leftClick() {
    for (const idx in Object.keys(this.imageCollections)) {
      if (this.imageCollections[idx].dataset.full_image_url === this.openedImageCurrent) {
        if (idx === '0') {
          this.openImage(this.imageCollections[this.imageCollections.length - 1].dataset.full_image_url);
        } else {
          this.openImage(this.imageCollections[idx - 1].dataset.full_image_url);
        }
        return;
      }
    }
  },

  /**
   * Open next image
   */
  rightClick() {
    for (const idx in Object.keys(this.imageCollections)) {
      if (this.imageCollections[idx].dataset.full_image_url === this.openedImageCurrent) {
        if (+idx === this.imageCollections.length - 1) {
          this.openImage(this.imageCollections[0].dataset.full_image_url);
        } else {
          this.openImage(this.imageCollections[parseInt(idx) + 1].dataset.full_image_url);
        }
        return;
      }
    }
  },

  /**
   * Закрывает (удаляет) контейнер для открытой картинки.
   */
  close() {
    document.querySelector(`.${this.settings.openedImageWrapperClass}`).remove();
  }
};

// Инициализируем нашу галерею при загрузке страницы.
window.onload = () => gallery.init(
  {
    previewSelector: '.galleryPreviewsContainer',
    openedNoImage: '../img/no_image.jpg',
    openedArrowClass: 'galleryWrapper__arrow',
    openedLeftArrow: '../img/leftarrowincircle.png',
    openedLeftArrowClass: 'galleryWrapper__arrow_left',
    openedRightArrow: '../img/rightarrowincircle.png',
    openedRightArrowClass: 'galleryWrapper__arrow_right',
    openedImageCurrent: null,
    imageCollections: null,
  }
);