<?php

namespace Html\TwigComponentBundle\Twig\Block;

use Html\Enum\{
    AutocompleteEnum,
    AutocorrectEnum,
    FormEnctypeEnum,
    FormMethodEnum,
    FormTargetEnum,
    AriaInvalidEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    DirectionEnum,
    TranslateEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Form', template: '@HtmlTwigComponent/block/form/form.html.twig')]
class Form
{
    public ?string $acceptCharset = null;
    public ?string $action = null;
    public ?AutocompleteEnum $autocomplete = null;
    public ?AutocorrectEnum $autocorrect = null;
    public ?FormEnctypeEnum $enctype = null;
    public ?FormMethodEnum $method = null;
    public ?string $name = null;
    public ?bool $novalidate = null;
    public ?FormTargetEnum $target = null;
    public ?AriaInvalidEnum $ariaInvalid = null;
    public ?string $ariaLabel = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
    public ?string $accesskey = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?string $lang = null;
    public ?string $slot = null;
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

        $resolver->setDefined('acceptCharset');
        $resolver->setAllowedTypes('acceptCharset', ['string']);
        $resolver->setDefined('action');
        $resolver->setAllowedTypes('action', ['string']);
        $resolver->setDefaults(['autocomplete' => null]);
        $resolver->setAllowedTypes('autocomplete', ['null', 'string', AutocompleteEnum::class]);
        $resolver->setNormalizer('autocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['autocorrect' => null]);
        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['enctype' => null]);
        $resolver->setAllowedTypes('enctype', ['null', 'string', FormEnctypeEnum::class]);
        $resolver->setNormalizer('enctype', function ($options, $value) {
            if (is_string($value)) {
                return FormEnctypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefaults(['method' => null]);
        $resolver->setAllowedTypes('method', ['null', 'string', FormMethodEnum::class]);
        $resolver->setNormalizer('method', function ($options, $value) {
            if (is_string($value)) {
                return FormMethodEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('name');
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setDefined('novalidate');
        $resolver->setAllowedTypes('novalidate', ['bool']);
        $resolver->setDefaults(['target' => null]);
        $resolver->setAllowedTypes('target', ['null', 'string', FormTargetEnum::class]);
        $resolver->setNormalizer('target', function ($options, $value) {
            if (is_string($value)) {
                return FormTargetEnum::tryFrom($value);
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
        $resolver->setDefined('slot');
        $resolver->setAllowedTypes('slot', ['string']);
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
