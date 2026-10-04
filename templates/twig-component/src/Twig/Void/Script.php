<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    CrossoriginEnum,
    ReferrerpolicyEnum,
    ScriptTypeEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Script - The script element is used to embed or reference an executable script within an HTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Script', template: '@HtmlTwigComponent/void/script/script.html.twig')]
class Script
{
    public ?bool $async = null;
    public ?string $charset = null;
    public ?CrossoriginEnum $crossorigin = null;
    public ?bool $defer = null;
    public ?string $integrity = null;
    public ?string $nonce = null;
    public ?ReferrerpolicyEnum $referrerpolicy = null;
    public ?string $src = null;
    public ?ScriptTypeEnum $type = null;
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

        $resolver->setDefined('async');
        $resolver->setAllowedTypes('async', ['bool']);
        $resolver->setDefined('charset');
        $resolver->setAllowedTypes('charset', ['string']);
        $resolver->setDefaults(['crossorigin' => null]);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('defer');
        $resolver->setAllowedTypes('defer', ['bool']);
        $resolver->setDefined('integrity');
        $resolver->setAllowedTypes('integrity', ['string']);
        $resolver->setDefined('nonce');
        $resolver->setAllowedTypes('nonce', ['string']);
        $resolver->setDefaults(['referrerpolicy' => null]);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('src');
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setDefaults(['type' => null]);
        $resolver->setAllowedTypes('type', ['null', 'string', ScriptTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return ScriptTypeEnum::tryFrom($value);
            }
            return $value;
        });
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
