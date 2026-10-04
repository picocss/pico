<?php

namespace Html\TwigComponentBundle\Twig\Block;

use Html\Enum\{
    DirectionEnum,
    TranslateEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Body', template: '@HtmlTwigComponent/block/body/body.html.twig')]
class Body
{
    public ?string $onafterprint = null;
    public ?string $onbeforeprint = null;
    public ?string $onbeforeunload = null;
    public ?string $onhashchange = null;
    public ?string $onlanguagechange = null;
    public ?string $onmessage = null;
    public ?string $onmessageerror = null;
    public ?string $onoffline = null;
    public ?string $ononline = null;
    public ?string $onpagehide = null;
    public ?string $onpageshow = null;
    public ?string $onpopstate = null;
    public ?string $onrejectionhandled = null;
    public ?string $onstorage = null;
    public ?string $onunhandledrejection = null;
    public ?string $onunload = null;
    public ?string $accesskey = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?string $lang = null;
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

        $resolver->setDefined('onafterprint');
        $resolver->setAllowedTypes('onafterprint', ['string']);
        $resolver->setDefined('onbeforeprint');
        $resolver->setAllowedTypes('onbeforeprint', ['string']);
        $resolver->setDefined('onbeforeunload');
        $resolver->setAllowedTypes('onbeforeunload', ['string']);
        $resolver->setDefined('onhashchange');
        $resolver->setAllowedTypes('onhashchange', ['string']);
        $resolver->setDefined('onlanguagechange');
        $resolver->setAllowedTypes('onlanguagechange', ['string']);
        $resolver->setDefined('onmessage');
        $resolver->setAllowedTypes('onmessage', ['string']);
        $resolver->setDefined('onmessageerror');
        $resolver->setAllowedTypes('onmessageerror', ['string']);
        $resolver->setDefined('onoffline');
        $resolver->setAllowedTypes('onoffline', ['string']);
        $resolver->setDefined('ononline');
        $resolver->setAllowedTypes('ononline', ['string']);
        $resolver->setDefined('onpagehide');
        $resolver->setAllowedTypes('onpagehide', ['string']);
        $resolver->setDefined('onpageshow');
        $resolver->setAllowedTypes('onpageshow', ['string']);
        $resolver->setDefined('onpopstate');
        $resolver->setAllowedTypes('onpopstate', ['string']);
        $resolver->setDefined('onrejectionhandled');
        $resolver->setAllowedTypes('onrejectionhandled', ['string']);
        $resolver->setDefined('onstorage');
        $resolver->setAllowedTypes('onstorage', ['string']);
        $resolver->setDefined('onunhandledrejection');
        $resolver->setAllowedTypes('onunhandledrejection', ['string']);
        $resolver->setDefined('onunload');
        $resolver->setAllowedTypes('onunload', ['string']);
        $resolver->setDefined('accesskey');
        $resolver->setAllowedTypes('accesskey', ['string']);
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
