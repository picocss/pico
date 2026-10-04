<?php

namespace Html\TwigComponentBundle\Twig\Block;

use Html\Enum\{
    ReferrerpolicyEnum,
    RoleEnum,
    AriaBusyEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    DirectionEnum,
    PopoverEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Iframe - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Iframe', template: '@HtmlTwigComponent/block/iframe/iframe.html.twig')]
class Iframe
{
    public ?bool $allowfullscreen = null;
    public ?string $height = null;
    public ?string $name = null;
    public ?ReferrerpolicyEnum $referrerpolicy = null;
    public ?string $sandbox = null;
    public ?bool $seamless = null;
    public ?string $src = null;
    public ?string $srcdoc = null;
    public ?string $width = null;
    public ?RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?AriaBusyEnum $ariaBusy = null;
    public ?AriaHiddenEnum $ariaHidden = null;
    public ?string $ariaLabel = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $hidden = null;
    public ?string $lang = null;
    public ?PopoverEnum $popover = null;
    public ?string $slot = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefined('allowfullscreen');
        $resolver->setAllowedTypes('allowfullscreen', ['bool']);
        $resolver->setDefined('height');
        $resolver->setAllowedTypes('height', ['string']);
        $resolver->setDefined('name');
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setDefaults(['referrerpolicy' => null]);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('sandbox');
        $resolver->setAllowedTypes('sandbox', ['string']);
        $resolver->setDefined('seamless');
        $resolver->setAllowedTypes('seamless', ['bool']);
        $resolver->setDefined('src');
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setDefined('srcdoc');
        $resolver->setAllowedTypes('srcdoc', ['string']);
        $resolver->setDefined('width');
        $resolver->setAllowedTypes('width', ['string']);
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
        $resolver->setDefined('ariaLabel');
        $resolver->setAllowedTypes('ariaLabel', ['string']);
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
        $resolver->setDefaults(['dir' => null]);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['hidden' => null]);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
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
        $resolver->setDefined('style');
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setDefined('tabindex');
        $resolver->setAllowedTypes('tabindex', ['int']);
        $resolver->setDefined('title');
        $resolver->setAllowedTypes('title', ['string']);
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
