{{--
  This file is auto-generated.

  Input - The input element represents a typed data field, usually with a form control to allow user input.

  @component input
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$autocorrectChoices = ['off' => true, 'on' => true];
$autocompleteChoices = ['off' => true, 'on' => true];
$typeChoices = ['button' => true, 'checkbox' => true, 'color' => true, 'date' => true, 'datetime-local' => true, 'email' => true, 'file' => true, 'hidden' => true, 'image' => true, 'month' => true, 'number' => true, 'password' => true, 'radio' => true, 'range' => true, 'reset' => true, 'search' => true, 'submit' => true, 'tel' => true, 'text' => true, 'time' => true, 'url' => true, 'week' => true];
$formenctypeChoices = ['application/x-www-form-urlencoded' => true, 'multipart/form-data' => true, 'text/plain' => true];
$formmethodChoices = ['get' => true, 'post' => true, 'dialog' => true];
$formtargetChoices = ['_self' => true, '_blank' => true, '_parent' => true, '_top' => true];
$popovertargetactionChoices = ['show' => true, 'hide' => true, 'toggle' => true];
$roleChoices = ['alert' => true, 'application' => true, 'article' => true, 'banner' => true, 'button' => true, 'checkbox' => true, 'complementary' => true, 'contentinfo' => true, 'dialog' => true, 'form' => true, 'grid' => true, 'group' => true, 'heading' => true, 'img' => true, 'link' => true, 'list' => true, 'listbox' => true, 'listitem' => true, 'main' => true, 'menu' => true, 'menubar' => true, 'menuitem' => true, 'navigation' => true, 'none' => true, 'presentation' => true, 'radio' => true, 'region' => true, 'search' => true, 'status' => true, 'tab' => true, 'tablist' => true, 'tabpanel' => true, 'textbox' => true, 'toolbar' => true, 'tooltip' => true];
$ariaCurrentChoices = ['false' => true, 'page' => true, 'step' => true, 'location' => true, 'date' => true, 'time' => true, 'true' => true];
$ariaInvalidChoices = ['false' => true, 'true' => true, 'grammar' => true, 'spelling' => true];
$ariaDisabledChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$ariaExpandedChoices = ['false' => true, 'true' => true, 'undefined' => true];
$ariaHaspopupChoices = ['false' => true, 'true' => true, 'menu' => true, 'listbox' => true, 'tree' => true, 'grid' => true, 'dialog' => true];
$ariaPressedChoices = ['false' => true, 'true' => true, 'mixed' => true, 'undefined' => true];
$ariaCheckedChoices = ['false' => true, 'true' => true, 'mixed' => true, 'undefined' => true];
$ariaAutocompleteChoices = ['none' => true, 'inline' => true, 'list' => true, 'both' => true];
$ariaReadonlyChoices = ['false' => true, 'true' => true];
$ariaRequiredChoices = ['false' => true, 'true' => true];
$autocapitalizeChoices = ['none' => true, 'sentences' => true, 'words' => true, 'characters' => true];
$contenteditableChoices = ['true' => true, 'false' => true, 'inherit' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$inputmodeChoices = ['none' => true, 'text' => true, 'decimal' => true, 'numeric' => true, 'email' => true, 'tel' => true, 'url' => true, 'search' => true];
$spellcheckChoices = ['true' => true, 'false' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accept)) $attrs[] = 'accept="' . e($accept) . '"';
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($alt)) $attrs[] = 'alt="' . e($alt) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaAutocomplete) && isset($ariaAutocompleteChoices[$ariaAutocomplete])) $attrs[] = 'aria-autocomplete="' . e($ariaAutocomplete) . '"';
if (isset($ariaChecked) && isset($ariaCheckedChoices[$ariaChecked])) $attrs[] = 'aria-checked="' . e($ariaChecked) . '"';
if (isset($ariaControls)) $attrs[] = 'aria-controls="' . e($ariaControls) . '"';
if (isset($ariaCurrent) && isset($ariaCurrentChoices[$ariaCurrent])) $attrs[] = 'aria-current="' . e($ariaCurrent) . '"';
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
if (isset($ariaPlaceholder)) $attrs[] = 'aria-placeholder="' . e($ariaPlaceholder) . '"';
if (isset($ariaPressed) && isset($ariaPressedChoices[$ariaPressed])) $attrs[] = 'aria-pressed="' . e($ariaPressed) . '"';
if (isset($ariaReadonly) && isset($ariaReadonlyChoices[$ariaReadonly])) $attrs[] = 'aria-readonly="' . e($ariaReadonly) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRequired) && isset($ariaRequiredChoices[$ariaRequired])) $attrs[] = 'aria-required="' . e($ariaRequired) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($ariaValuemax)) $attrs[] = 'aria-valuemax="' . e($ariaValuemax) . '"';
if (isset($ariaValuemin)) $attrs[] = 'aria-valuemin="' . e($ariaValuemin) . '"';
if (isset($ariaValuenow)) $attrs[] = 'aria-valuenow="' . e($ariaValuenow) . '"';
if (isset($ariaValuetext)) $attrs[] = 'aria-valuetext="' . e($ariaValuetext) . '"';
if (isset($autocapitalize) && isset($autocapitalizeChoices[$autocapitalize])) $attrs[] = 'autocapitalize="' . e($autocapitalize) . '"';
if (isset($autocomplete) && isset($autocompleteChoices[$autocomplete])) $attrs[] = 'autocomplete="' . e($autocomplete) . '"';
if (isset($autocorrect) && isset($autocorrectChoices[$autocorrect])) $attrs[] = 'autocorrect="' . e($autocorrect) . '"';
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($checked)) $attrs[] = 'checked="' . e($checked) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($dirname)) $attrs[] = 'dirname="' . e($dirname) . '"';
if (isset($disabled)) $attrs[] = 'disabled="' . e($disabled) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($form)) $attrs[] = 'form="' . e($form) . '"';
if (isset($formaction)) $attrs[] = 'formaction="' . e($formaction) . '"';
if (isset($formenctype) && isset($formenctypeChoices[$formenctype])) $attrs[] = 'formenctype="' . e($formenctype) . '"';
if (isset($formmethod) && isset($formmethodChoices[$formmethod])) $attrs[] = 'formmethod="' . e($formmethod) . '"';
if (isset($formnovalidate)) $attrs[] = 'formnovalidate="' . e($formnovalidate) . '"';
if (isset($formtarget) && isset($formtargetChoices[$formtarget])) $attrs[] = 'formtarget="' . e($formtarget) . '"';
if (isset($height)) $attrs[] = 'height="' . e($height) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($list)) $attrs[] = 'list="' . e($list) . '"';
if (isset($max)) $attrs[] = 'max="' . e($max) . '"';
if (isset($maxlength)) $attrs[] = 'maxlength="' . e($maxlength) . '"';
if (isset($min)) $attrs[] = 'min="' . e($min) . '"';
if (isset($minlength)) $attrs[] = 'minlength="' . e($minlength) . '"';
if (isset($multiple)) $attrs[] = 'multiple="' . e($multiple) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($pattern)) $attrs[] = 'pattern="' . e($pattern) . '"';
if (isset($placeholder)) $attrs[] = 'placeholder="' . e($placeholder) . '"';
if (isset($popovertarget)) $attrs[] = 'popovertarget="' . e($popovertarget) . '"';
if (isset($popovertargetaction) && isset($popovertargetactionChoices[$popovertargetaction])) $attrs[] = 'popovertargetaction="' . e($popovertargetaction) . '"';
if (isset($readonly)) $attrs[] = 'readonly="' . e($readonly) . '"';
if (isset($required)) $attrs[] = 'required="' . e($required) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($size)) $attrs[] = 'size="' . e($size) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($step)) $attrs[] = 'step="' . e($step) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
if (isset($type) && isset($typeChoices[$type])) $attrs[] = 'type="' . e($type) . '"';
if (isset($value)) $attrs[] = 'value="' . e($value) . '"';
if (isset($width)) $attrs[] = 'width="' . e($width) . '"';
@endphp
@section('input')
<input {!! implode(' ', $attrs) !!} />
@endsection
