<?php

namespace Html\TwigComponentBundle\Twig\Block;

use Html\Enum\{
    RoleEnum,
    AriaBusyEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    PopoverEnum,
    SpellCheckEnum,
    TranslateEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Dt - The dt element represents the term, or name, part of a term-description group in a description list (dl element).
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Dt', template: '@HtmlTwigComponent/block/dt/dt.html.twig')]
class Dt
{
    public ?RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?AriaBusyEnum $ariaBusy = null;
    public ?AriaHiddenEnum $ariaHidden = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
    public ?string $accesskey = null;
    public ?AutoCapitalizeEnum $autocapitalize = null;
    public null|string|bool $autofocus = null;
    public ?ContentEditableEnum $contenteditable = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?PopoverEnum $popover = null;
    public ?string $slot = null;
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
        $resolver->setDefaults(['ariaBusy' => null]);
        $resolver->setAllowedTypes('ariaBusy', ['null', 'string', AriaBusyEnum::class]);
        $resolver->setNormalizer('ariaBusy', function ($options, $value) {
            if (is_string($value)) {
                return AriaBusyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['ariaHidden' => null]);
        $resolver->setAllowedTypes('ariaHidden', ['null', 'string', AriaHiddenEnum::class]);
        $resolver->setNormalizer('ariaHidden', function ($options, $value) {
            if (is_string($value)) {
                return AriaHiddenEnum::tryFrom($value);
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
        $resolver->setDefaults(['popover' => null]);
        $resolver->setAllowedTypes('popover', ['null', 'string', PopoverEnum::class]);
        $resolver->setNormalizer('popover', function ($options, $value) {
            if (is_string($value)) {
                return PopoverEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('slot');
        $resolver->setAllowedTypes('slot', ['string']);
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
