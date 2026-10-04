{{--
  This file is auto-generated.

  Select - The select element represents a control for selecting amongst a set of options.

  @component select
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$autocompleteChoices = ['off' => true, 'on' => true];
$autocorrectChoices = ['off' => true, 'on' => true];
$roleChoices = ['alert' => true, 'application' => true, 'article' => true, 'banner' => true, 'button' => true, 'checkbox' => true, 'complementary' => true, 'contentinfo' => true, 'dialog' => true, 'form' => true, 'grid' => true, 'group' => true, 'heading' => true, 'img' => true, 'link' => true, 'list' => true, 'listbox' => true, 'listitem' => true, 'main' => true, 'menu' => true, 'menubar' => true, 'menuitem' => true, 'navigation' => true, 'none' => true, 'presentation' => true, 'radio' => true, 'region' => true, 'search' => true, 'status' => true, 'tab' => true, 'tablist' => true, 'tabpanel' => true, 'textbox' => true, 'toolbar' => true, 'tooltip' => true];
$ariaInvalidChoices = ['false' => true, 'true' => true, 'grammar' => true, 'spelling' => true];
$ariaDisabledChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$ariaExpandedChoices = ['false' => true, 'true' => true, 'undefined' => true];
$ariaHaspopupChoices = ['false' => true, 'true' => true, 'menu' => true, 'listbox' => true, 'tree' => true, 'grid' => true, 'dialog' => true];
$ariaPressedChoices = ['false' => true, 'true' => true, 'mixed' => true, 'undefined' => true];
$ariaAutocompleteChoices = ['none' => true, 'inline' => true, 'list' => true, 'both' => true];
$ariaReadonlyChoices = ['false' => true, 'true' => true];
$ariaRequiredChoices = ['false' => true, 'true' => true];
$ariaMultiselectableChoices = ['false' => true, 'true' => true];
$ariaOrientationChoices = ['horizontal' => true, 'vertical' => true, 'undefined' => true];
$autocapitalizeChoices = ['none' => true, 'sentences' => true, 'words' => true, 'characters' => true];
$contenteditableChoices = ['true' => true, 'false' => true, 'inherit' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$inputmodeChoices = ['none' => true, 'text' => true, 'decimal' => true, 'numeric' => true, 'email' => true, 'tel' => true, 'url' => true, 'search' => true];
$popoverChoices = ['auto' => true, 'hint' => true, 'manual' => true];
$spellcheckChoices = ['true' => true, 'false' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($ariaActivedescendant)) $attrs[] = 'aria-activedescendant="' . e($ariaActivedescendant) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaAutocomplete) && isset($ariaAutocompleteChoices[$ariaAutocomplete])) $attrs[] = 'aria-autocomplete="' . e($ariaAutocomplete) . '"';
if (isset($ariaControls)) $attrs[] = 'aria-controls="' . e($ariaControls) . '"';
if (isset($ariaDescribedby)) $attrs[] = 'aria-describedby="' . e($ariaDescribedby) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaDisabled) && isset($ariaDisabledChoices[$ariaDisabled])) $attrs[] = 'aria-disabled="' . e($ariaDisabled) . '"';
if (isset($ariaExpanded) && isset($ariaExpandedChoices[$ariaExpanded])) $attrs[] = 'aria-expanded="' . e($ariaExpanded) . '"';
if (isset($ariaHaspopup) && isset($ariaHaspopupChoices[$ariaHaspopup])) $attrs[] = 'aria-haspopup="' . e($ariaHaspopup) . '"';
if (isset($ariaInvalid) && isset($ariaInvalidChoices[$ariaInvalid])) $attrs[] = 'aria-invalid="' . e($ariaInvalid) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabel)) $attrs[] = 'aria-label="' . e($ariaLabel) . '"';
if (isset($ariaLabelledby)) $attrs[] = 'aria-labelledby="' . e($ariaLabelledby) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaMultiselectable) && isset($ariaMultiselectableChoices[$ariaMultiselectable])) $attrs[] = 'aria-multiselectable="' . e($ariaMultiselectable) . '"';
if (isset($ariaOrientation) && isset($ariaOrientationChoices[$ariaOrientation])) $attrs[] = 'aria-orientation="' . e($ariaOrientation) . '"';
if (isset($ariaPlaceholder)) $attrs[] = 'aria-placeholder="' . e($ariaPlaceholder) . '"';
if (isset($ariaPressed) && isset($ariaPressedChoices[$ariaPressed])) $attrs[] = 'aria-pressed="' . e($ariaPressed) . '"';
if (isset($ariaReadonly) && isset($ariaReadonlyChoices[$ariaReadonly])) $attrs[] = 'aria-readonly="' . e($ariaReadonly) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRequired) && isset($ariaRequiredChoices[$ariaRequired])) $attrs[] = 'aria-required="' . e($ariaRequired) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($autocapitalize) && isset($autocapitalizeChoices[$autocapitalize])) $attrs[] = 'autocapitalize="' . e($autocapitalize) . '"';
if (isset($autocomplete) && isset($autocompleteChoices[$autocomplete])) $attrs[] = 'autocomplete="' . e($autocomplete) . '"';
if (isset($autocorrect) && isset($autocorrectChoices[$autocorrect])) $attrs[] = 'autocorrect="' . e($autocorrect) . '"';
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($disabled)) $attrs[] = 'disabled="' . e($disabled) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($form)) $attrs[] = 'form="' . e($form) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($multiple)) $attrs[] = 'multiple="' . e($multiple) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($popover) && isset($popoverChoices[$popover])) $attrs[] = 'popover="' . e($popover) . '"';
if (isset($required)) $attrs[] = 'required="' . e($required) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($size)) $attrs[] = 'size="' . e($size) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
@endphp
@section('select')
<select {!! implode(' ', $attrs) !!}>
  @yield('content')
</select>
@endsection
