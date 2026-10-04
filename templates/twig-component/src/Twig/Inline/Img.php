<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    CrossoriginEnum,
    DecodingEnum,
    ReferrerpolicyEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    DirectionEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Img - The img element represents an image.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Img', template: '@HtmlTwigComponent/inline/img/img.html.twig')]
class Img
{
    public ?string $alt = null;
    public ?CrossoriginEnum $crossorigin = null;
    public ?DecodingEnum $decoding = null;
    public ?string $height = null;
    public ?bool $ismap = null;
    public ?ReferrerpolicyEnum $referrerpolicy = null;
    public ?string $sizes = null;
    public ?string $src = null;
    public ?string $srcset = null;
    public ?string $usemap = null;
    public ?string $width = null;
    public ?AriaHiddenEnum $ariaHidden = null;
    public ?string $ariaLabel = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?string $lang = null;
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

        $resolver->setDefined('alt');
        $resolver->setAllowedTypes('alt', ['string']);
        $resolver->setDefaults(['crossorigin' => null]);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['decoding' => null]);
        $resolver->setAllowedTypes('decoding', ['null', 'string', DecodingEnum::class]);
        $resolver->setNormalizer('decoding', function ($options, $value) {
            if (is_string($value)) {
                return DecodingEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('height');
        $resolver->setAllowedTypes('height', ['string']);
        $resolver->setDefined('ismap');
        $resolver->setAllowedTypes('ismap', ['bool']);
        $resolver->setDefaults(['referrerpolicy' => null]);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('sizes');
        $resolver->setAllowedTypes('sizes', ['string']);
        $resolver->setDefined('src');
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setDefined('srcset');
        $resolver->setAllowedTypes('srcset', ['string']);
        $resolver->setDefined('usemap');
        $resolver->setAllowedTypes('usemap', ['string']);
        $resolver->setDefined('width');
        $resolver->setAllowedTypes('width', ['string']);
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
        $resolver->setDefaults(['draggable' => null]);
        $resolver->setAllowedTypes('draggable', ['null', 'string', 'bool']);
        $resolver->setDefaults(['hidden' => null]);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setDefined('lang');
        $resolver->setAllowedTypes('lang', ['string']);
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
