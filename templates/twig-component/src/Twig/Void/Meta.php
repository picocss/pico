<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    HttpEquivEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Meta - The meta element provides metadata about the HTML document. Metadata will not be displayed on the page, but is machine-readable. Mainly used in the head but allowed inside the body if itemprop attribute is set.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Meta', template: '@HtmlTwigComponent/void/meta/meta.html.twig')]
class Meta
{
    public ?string $charset = null;
    public ?string $content = null;
    public ?HttpEquivEnum $httpEquiv = null;
    public ?string $name = null;
    public ?string $scheme = null;
    public null|string|bool $hidden = null;
    public ?string $lang = null;
    public ?string $title = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefined('charset');
        $resolver->setAllowedTypes('charset', ['string']);
        $resolver->setDefined('content');
        $resolver->setAllowedTypes('content', ['string']);
        $resolver->setDefaults(['httpEquiv' => null]);
        $resolver->setAllowedTypes('httpEquiv', ['null', 'string', HttpEquivEnum::class]);
        $resolver->setNormalizer('httpEquiv', function ($options, $value) {
            if (is_string($value)) {
                return HttpEquivEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('name');
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setDefined('scheme');
        $resolver->setAllowedTypes('scheme', ['string']);
        $resolver->setDefaults(['hidden' => null]);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setDefined('lang');
        $resolver->setAllowedTypes('lang', ['string']);
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
