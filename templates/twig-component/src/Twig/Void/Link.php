<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    CrossoriginEnum,
    ReferrerpolicyEnum,
    LinkRelEnum,
    DirectionEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Link', template: '@HtmlTwigComponent/void/link/link.html.twig')]
class Link
{
    public ?CrossoriginEnum $crossorigin = null;
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?string $integrity = null;
    public ?string $media = null;
    public ?ReferrerpolicyEnum $referrerpolicy = null;
    public ?LinkRelEnum $rel = null;
    public ?string $sizes = null;
    public ?string $type = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $hidden = null;
    public ?string $lang = null;
    public ?string $style = null;
    public ?string $title = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefaults(['crossorigin' => null]);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('href');
        $resolver->setAllowedTypes('href', ['string']);
        $resolver->setDefined('hreflang');
        $resolver->setAllowedTypes('hreflang', ['string']);
        $resolver->setDefined('integrity');
        $resolver->setAllowedTypes('integrity', ['string']);
        $resolver->setDefined('media');
        $resolver->setAllowedTypes('media', ['string']);
        $resolver->setDefaults(['referrerpolicy' => null]);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['rel' => null]);
        $resolver->setAllowedTypes('rel', ['null', 'string', LinkRelEnum::class]);
        $resolver->setNormalizer('rel', function ($options, $value) {
            if (is_string($value)) {
                return LinkRelEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('sizes');
        $resolver->setAllowedTypes('sizes', ['string']);
        $resolver->setDefined('type');
        $resolver->setAllowedTypes('type', ['string']);
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
        $resolver->setDefined('style');
        $resolver->setAllowedTypes('style', ['string']);
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
