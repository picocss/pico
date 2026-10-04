<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
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
 * Progress - The progress element represents the completion progress of a task.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Progress', template: '@HtmlTwigComponent/inline/progress/progress.html.twig')]
class Progress
{
    public ?int $max = null;
    public ?string $value = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
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

        $resolver->setDefined('max');
        $resolver->setAllowedTypes('max', ['int']);
        $resolver->setDefined('value');
        $resolver->setAllowedTypes('value', ['string']);
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
