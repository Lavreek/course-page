import CommentsExpand from "../modules/comments-list";
import ModulesList from "../modules/modules-list";
import Popup from "../modules/popup";
import MouseParallax from "../modules/animation/MouseParallax";
import FormHandler from "../modules/FormHandler";

import {emailSubmitValidator, phoneSubmitValidator, notEmptySubmitValidator} from "../utils/validation/FormSubmitValidators";
import {phoneLiveValidator} from "../utils/validation/LiveValidators";

new FormHandler(
    '.apply-form__form',
{
        'input[name="name"]': {
            inputName: 'Имя',
            submitValidators: [notEmptySubmitValidator]
        },
        'input[name="email"]': {
            inputName: 'Имейл',
            submitValidators: [emailSubmitValidator]
        },
        'input[name="telephone"]': {
            inputName: 'Телефон',
            liveValidator: phoneLiveValidator,
            submitValidators: [phoneSubmitValidator]
        },
    },
    'error',
    '.apply-form__errors'
);

new FormHandler(
    '.popup-apply-form__form',
    {
        'input[name="name"]': {
            inputName: 'Имя',
            submitValidators: [notEmptySubmitValidator]
        },
        'input[name="email"]': {
            inputName: 'Имейл',
            submitValidators: [emailSubmitValidator]
        },
        'input[name="telephone"]': {
            inputName: 'Телефон',
            liveValidator: phoneLiveValidator,
            submitValidators: [phoneSubmitValidator]
        },
    },
    'error',
    '.popup-apply-form__errors'
);

new CommentsExpand(
    '.review__wrapper',
    '.review-item',
    '.expand-all-comments',
    '.hide-all-comments',
    '.review-item__content',
    '.expand-review',
    '.hide-review',
    'expanded',
    3
);

new ModulesList(
    '.programs__item',
    '.program-block',
    'expanded'
)

new Popup(
    '.top-nav__button',
    '.popup-overlay',
    'hidden'
);

new MouseParallax(
    '.promo-animated__3D-1',
    1.7,
    2
);

new MouseParallax(
    '.promo-animated__3D-2',
    1.5,
    -1.5
);
