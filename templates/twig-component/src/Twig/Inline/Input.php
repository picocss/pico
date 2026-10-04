<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    AutocorrectEnum,
    AutocompleteEnum,
    InputTypeEnum,
    FormenctypeEnum,
    FormmethodEnum,
    FormtargetEnum,
    PopovertargetactionEnum,
    RoleEnum,
    AriaCurrentEnum,
    AriaInvalidEnum,
    AriaDisabledEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    AriaExpandedEnum,
    AriaHaspopupEnum,
    AriaPressedEnum,
    AriaCheckedEnum,
    AriaAutocompleteEnum,
    AriaReadonlyEnum,
    AriaRequiredEnum,
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    SpellCheckEnum,
    TranslateEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Input', template: '@HtmlTwigComponent/inline/input/input.html.twig')]
class Input
{
    public ?string $accept = null;
    public ?AutocorrectEnum $autocorrect = null;
    public ?string $alt = null;
    public ?AutocompleteEnum $autocomplete = null;
    public ?bool $checked = null;
    public ?string $dirname = null;
    public ?bool $disabled = null;
    public ?string $height = null;
    public ?string $list = null;
    public ?int $max = null;
    public ?int $maxlength = null;
    public ?string $min = null;
    public ?int $minlength = null;
    public ?bool $multiple = null;
    public ?string $name = null;
    public ?string $pattern = null;
    public ?string $placeholder = null;
    public ?bool $readonly = null;
    public ?bool $required = null;
    public ?int $size = null;
    public ?string $src = null;
    public ?string $step = null;
    public ?InputTypeEnum $type = null;
    public ?string $value = null;
    public ?string $width = null;
    public ?string $form = null;
    public ?string $formaction = null;
    public ?FormenctypeEnum $formenctype = null;
    public ?FormmethodEnum $formmethod = null;
    public ?bool $formnovalidate = null;
    public ?FormtargetEnum $formtarget = null;
    public ?string $popovertarget = null;
    public ?PopovertargetactionEnum $popovertargetaction = null;
    public ?RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?AriaCurrentEnum $ariaCurrent = null;
    public ?AriaInvalidEnum $ariaInvalid = null;
    public ?string $ariaLabel = null;
    public ?AriaDisabledEnum $ariaDisabled = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
    public ?AriaExpandedEnum $ariaExpanded = null;
    public ?AriaHaspopupEnum $ariaHaspopup = null;
    public ?AriaPressedEnum $ariaPressed = null;
    public ?AriaCheckedEnum $ariaChecked = null;
    public ?AriaAutocompleteEnum $ariaAutocomplete = null;
    public ?string $ariaPlaceholder = null;
    public ?AriaReadonlyEnum $ariaReadonly = null;
    public ?AriaRequiredEnum $ariaRequired = null;
    public ?int $ariaValuemax = null;
    public ?int $ariaValuemin = null;
    public ?int $ariaValuenow = null;
    public ?string $ariaValuetext = null;
    public ?string $accesskey = null;
    public ?AutoCapitalizeEnum $autocapitalize = null;
    public null|string|bool $autofocus = null;
    public ?ContentEditableEnum $contenteditable = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?TranslateEnum $translate = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefined('accept');
        $resolver->setAllowedTypes('accept', ['string']);
        $resolver->setDefaults(['autocorrect' => null]);
        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('alt');
        $resolver->setAllowedTypes('alt', ['string']);
        $resolver->setDefaults(['autocomplete' => null]);
        $resolver->setAllowedTypes('autocomplete', ['null', 'string', AutocompleteEnum::class]);
        $resolver->setNormalizer('autocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('checked');
        $resolver->setAllowedTypes('checked', ['bool']);
        $resolver->setDefined('dirname');
        $resolver->setAllowedTypes('dirname', ['string']);
        $resolver->setDefined('disabled');
        $resolver->setAllowedTypes('disabled', ['bool']);
        $resolver->setDefined('height');
        $resolver->setAllowedTypes('height', ['string']);
        $resolver->setDefined('list');
        $resolver->setAllowedTypes('list', ['string']);
        $resolver->setDefined('max');
        $resolver->setAllowedTypes('max', ['int']);
        $resolver->setDefined('maxlength');
        $resolver->setAllowedTypes('maxlength', ['int']);
        $resolver->setDefined('min');
        $resolver->setAllowedTypes('min', ['string']);
        $resolver->setDefined('minlength');
        $resolver->setAllowedTypes('minlength', ['int']);
        $resolver->setDefined('multiple');
        $resolver->setAllowedTypes('multiple', ['bool']);
        $resolver->setDefined('name');
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setDefined('pattern');
        $resolver->setAllowedTypes('pattern', ['string']);
        $resolver->setDefined('placeholder');
        $resolver->setAllowedTypes('placeholder', ['string']);
        $resolver->setDefined('readonly');
        $resolver->setAllowedTypes('readonly', ['bool']);
        $resolver->setDefined('required');
        $resolver->setAllowedTypes('required', ['bool']);
        $resolver->setDefined('size');
        $resolver->setAllowedTypes('size', ['int']);
        $resolver->setDefined('src');
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setDefined('step');
        $resolver->setAllowedTypes('step', ['string']);
        $resolver->setDefaults(['type' => null]);
        $resolver->setAllowedTypes('type', ['null', 'string', InputTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return InputTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('value');
        $resolver->setAllowedTypes('value', ['string']);
        $resolver->setDefined('width');
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setDefined('form');
        $resolver->setAllowedTypes('form', ['string']);
        $resolver->setDefined('formaction');
        $resolver->setAllowedTypes('formaction', ['string']);
        $resolver->setDefaults(['formenctype' => null]);
        $resolver->setAllowedTypes('formenctype', ['null', 'string', FormenctypeEnum::class]);
        $resolver->setNormalizer('formenctype', function ($options, $value) {
            if (is_string($value)) {
                return FormenctypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['formmethod' => null]);
        $resolver->setAllowedTypes('formmethod', ['null', 'string', FormmethodEnum::class]);
        $resolver->setNormalizer('formmethod', function ($options, $value) {
            if (is_string($value)) {
                return FormmethodEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('formnovalidate');
        $resolver->setAllowedTypes('formnovalidate', ['bool']);
        $resolver->setDefaults(['formtarget' => null]);
        $resolver->setAllowedTypes('formtarget', ['null', 'string', FormtargetEnum::class]);
        $resolver->setNormalizer('formtarget', function ($options, $value) {
            if (is_string($value)) {
                return FormtargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('popovertarget');
        $resolver->setAllowedTypes('popovertarget', ['string']);
        $resolver->setDefaults(['popovertargetaction' => null]);
        $resolver->setAllowedTypes('popovertargetaction', ['null', 'string', PopovertargetactionEnum::class]);
        $resolver->setNormalizer('popovertargetaction', function ($options, $value) {
            if (is_string($value)) {
                return PopovertargetactionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['role' => null]);
        $resolver->setAllowedTypes('role', ['null', 'string', RoleEnum::class]);
        $resolver->setNormalizer('role', function ($options, $value) {
            if (is_string($value)) {
                return RoleEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('ariaControls');
        $resolver->setAllowedTypes('ariaControls', ['string']);
        $resolver->setDefined('ariaDescribedby');
        $resolver->setAllowedTypes('ariaDescribedby', ['string']);
        $resolver->setDefined('ariaLabelledby');
        $resolver->setAllowedTypes('ariaLabelledby', ['string']);
        $resolver->setDefaults(['ariaCurrent' => null]);
        $resolver->setAllowedTypes('ariaCurrent', ['null', 'string', AriaCurrentEnum::class]);
        $resolver->setNormalizer('ariaCurrent', function ($options, $value) {
            if (is_string($value)) {
                return AriaCurrentEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaInvalid' => null]);
        $resolver->setAllowedTypes('ariaInvalid', ['null', 'string', AriaInvalidEnum::class]);
        $resolver->setNormalizer('ariaInvalid', function ($options, $value) {
            if (is_string($value)) {
                return AriaInvalidEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('ariaLabel');
        $resolver->setAllowedTypes('ariaLabel', ['string']);
        $resolver->setDefaults(['ariaDisabled' => null]);
        $resolver->setAllowedTypes('ariaDisabled', ['null', 'string', AriaDisabledEnum::class]);
        $resolver->setNormalizer('ariaDisabled', function ($options, $value) {
            if (is_string($value)) {
                return AriaDisabledEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('ariaDetails');
        $resolver->setAllowedTypes('ariaDetails', ['string']);
        $resolver->setDefined('ariaKeyshortcuts');
        $resolver->setAllowedTypes('ariaKeyshortcuts', ['string']);
        $resolver->setDefined('ariaRoledescription');
        $resolver->setAllowedTypes('ariaRoledescription', ['string']);
        $resolver->setDefaults(['ariaLive' => null]);
        $resolver->setAllowedTypes('ariaLive', ['null', 'string', AriaLiveEnum::class]);
        $resolver->setNormalizer('ariaLive', function ($options, $value) {
            if (is_string($value)) {
                return AriaLiveEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaRelevant' => null]);
        $resolver->setAllowedTypes('ariaRelevant', ['null', 'string', AriaRelevantEnum::class]);
        $resolver->setNormalizer('ariaRelevant', function ($options, $value) {
            if (is_string($value)) {
                return AriaRelevantEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaAtomic' => null]);
        $resolver->setAllowedTypes('ariaAtomic', ['null', 'string', AriaAtomicEnum::class]);
        $resolver->setNormalizer('ariaAtomic', function ($options, $value) {
            if (is_string($value)) {
                return AriaAtomicEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaExpanded' => null]);
        $resolver->setAllowedTypes('ariaExpanded', ['null', 'string', AriaExpandedEnum::class]);
        $resolver->setNormalizer('ariaExpanded', function ($options, $value) {
            if (is_string($value)) {
                return AriaExpandedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaHaspopup' => null]);
        $resolver->setAllowedTypes('ariaHaspopup', ['null', 'string', AriaHaspopupEnum::class]);
        $resolver->setNormalizer('ariaHaspopup', function ($options, $value) {
            if (is_string($value)) {
                return AriaHaspopupEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaPressed' => null]);
        $resolver->setAllowedTypes('ariaPressed', ['null', 'string', AriaPressedEnum::class]);
        $resolver->setNormalizer('ariaPressed', function ($options, $value) {
            if (is_string($value)) {
                return AriaPressedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaChecked' => null]);
        $resolver->setAllowedTypes('ariaChecked', ['null', 'string', AriaCheckedEnum::class]);
        $resolver->setNormalizer('ariaChecked', function ($options, $value) {
            if (is_string($value)) {
                return AriaCheckedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaAutocomplete' => null]);
        $resolver->setAllowedTypes('ariaAutocomplete', ['null', 'string', AriaAutocompleteEnum::class]);
        $resolver->setNormalizer('ariaAutocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AriaAutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('ariaPlaceholder');
        $resolver->setAllowedTypes('ariaPlaceholder', ['string']);
        $resolver->setDefaults(['ariaReadonly' => null]);
        $resolver->setAllowedTypes('ariaReadonly', ['null', 'string', AriaReadonlyEnum::class]);
        $resolver->setNormalizer('ariaReadonly', function ($options, $value) {
            if (is_string($value)) {
                return AriaReadonlyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaRequired' => null]);
        $resolver->setAllowedTypes('ariaRequired', ['null', 'string', AriaRequiredEnum::class]);
        $resolver->setNormalizer('ariaRequired', function ($options, $value) {
            if (is_string($value)) {
                return AriaRequiredEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('ariaValuemax');
        $resolver->setAllowedTypes('ariaValuemax', ['int']);
        $resolver->setDefined('ariaValuemin');
        $resolver->setAllowedTypes('ariaValuemin', ['int']);
        $resolver->setDefined('ariaValuenow');
        $resolver->setAllowedTypes('ariaValuenow', ['int']);
        $resolver->setDefined('ariaValuetext');
        $resolver->setAllowedTypes('ariaValuetext', ['string']);
        $resolver->setDefined('accesskey');
        $resolver->setAllowedTypes('accesskey', ['string']);
        $resolver->setDefaults(['autocapitalize' => null]);
        $resolver->setAllowedTypes('autocapitalize', ['null', 'string', AutoCapitalizeEnum::class]);
        $resolver->setNormalizer('autocapitalize', function ($options, $value) {
            if (is_string($value)) {
                return AutoCapitalizeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['autofocus' => null]);
        $resolver->setAllowedTypes('autofocus', ['null', 'string', 'bool']);
        $resolver->setDefaults(['contenteditable' => null]);
        $resolver->setAllowedTypes('contenteditable', ['null', 'string', ContentEditableEnum::class]);
        $resolver->setNormalizer('contenteditable', function ($options, $value) {
            if (is_string($value)) {
                return ContentEditableEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['dir' => null]);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['draggable' => null]);
        $resolver->setAllowedTypes('draggable', ['null', 'string', 'bool']);
        $resolver->setDefaults(['hidden' => null]);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setDefaults(['inputmode' => null]);
        $resolver->setAllowedTypes('inputmode', ['null', 'string', InputModeEnum::class]);
        $resolver->setNormalizer('inputmode', function ($options, $value) {
            if (is_string($value)) {
                return InputModeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('lang');
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setDefaults(['spellcheck' => null]);
        $resolver->setAllowedTypes('spellcheck', ['null', 'string', SpellCheckEnum::class]);
        $resolver->setNormalizer('spellcheck', function ($options, $value) {
            if (is_string($value)) {
                return SpellCheckEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('style');
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setDefined('tabindex');
        $resolver->setAllowedTypes('tabindex', ['int']);
        $resolver->setDefined('title');
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setDefaults(['translate' => null]);
        $resolver->setAllowedTypes('translate', ['null', 'string', TranslateEnum::class]);
        $resolver->setNormalizer('translate', function ($options, $value) {
            if (is_string($value)) {
                return TranslateEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['id' => null]);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setDefaults(['class' => null]);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        $resolved = $resolver->resolve($data);
        if (isset($data['blocks'])) {
            $resolved['blocks'] = $data['blocks'];
        }
        return $resolved;
    }
}
