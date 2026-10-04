<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    RelEnum,
    ShapeEnum,
    TargetEnum,
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
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Area', template: '@HtmlTwigComponent/void/area/area.html.twig')]
class Area
{
    public ?string $alt = null;
    public ?string $coords = null;
    public ?string $download = null;
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?RelEnum $rel = null;
    public ?ShapeEnum $shape = null;
    public ?TargetEnum $target = null;
    public ?string $type = null;
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

        $resolver->setDefined('alt');
        $resolver->setAllowedTypes('alt', ['string']);
        $resolver->setDefined('coords');
        $resolver->setAllowedTypes('coords', ['string']);
        $resolver->setDefined('download');
        $resolver->setAllowedTypes('download', ['string']);
        $resolver->setDefined('href');
        $resolver->setAllowedTypes('href', ['string']);
        $resolver->setDefined('hreflang');
        $resolver->setAllowedTypes('hreflang', ['string']);
        $resolver->setDefaults(['rel' => null]);
        $resolver->setAllowedTypes('rel', ['null', 'string', RelEnum::class]);
        $resolver->setNormalizer('rel', function ($options, $value) {
            if (is_string($value)) {
                return RelEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['shape' => null]);
        $resolver->setAllowedTypes('shape', ['null', 'string', ShapeEnum::class]);
        $resolver->setNormalizer('shape', function ($options, $value) {
            if (is_string($value)) {
                return ShapeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['target' => null]);
        $resolver->setAllowedTypes('target', ['null', 'string', TargetEnum::class]);
        $resolver->setNormalizer('target', function ($options, $value) {
            if (is_string($value)) {
                return TargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('type');
        $resolver->setAllowedTypes('type', ['string']);
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
