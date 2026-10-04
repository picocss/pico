{{--
  This file is auto-generated.

  Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.

  @component button
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$autocorrectChoices = ['off' => true, 'on' => true];
$typeChoices = ['submit' => true, 'reset' => true, 'button' => true];
$formenctypeChoices = ['application/x-www-form-urlencoded' => true, 'multipart/form-data' => true, 'text/plain' => true];
$formmethodChoices = ['get' => true, 'post' => true, 'dialog' => true];
$formtargetChoices = ['_self' => true, '_blank' => true, '_parent' => true, '_top' => true];
$popovertargetactionChoices = ['show' => true, 'hide' => true, 'toggle' => true];
$roleChoices = ['alert' => true, 'application' => true, 'article' => true, 'banner' => true, 'button' => true, 'checkbox' => true, 'complementary' => true, 'contentinfo' => true, 'dialog' => true, 'form' => true, 'grid' => true, 'group' => true, 'heading' => true, 'img' => true, 'link' => true, 'list' => true, 'listbox' => true, 'listitem' => true, 'main' => true, 'menu' => true, 'menubar' => true, 'menuitem' => true, 'navigation' => true, 'none' => true, 'presentation' => true, 'radio' => true, 'region' => true, 'search' => true, 'status' => true, 'tab' => true, 'tablist' => true, 'tabpanel' => true, 'textbox' => true, 'toolbar' => true, 'tooltip' => true];
$ariaCurrentChoices = ['false' => true, 'page' => true, 'step' => true, 'location' => true, 'date' => true, 'time' => true, 'true' => true];
$ariaBusyChoices = ['true' => true, 'false' => true];
$ariaDisabledChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$ariaExpandedChoices = ['false' => true, 'true' => true, 'undefined' => true];
$ariaHaspopupChoices = ['false' => true, 'true' => true, 'menu' => true, 'listbox' => true, 'tree' => true, 'grid' => true, 'dialog' => true];
$ariaPressedChoices = ['false' => true, 'true' => true, 'mixed' => true, 'undefined' => true];
$ariaCheckedChoices = ['false' => true, 'true' => true, 'mixed' => true, 'undefined' => true];
$autocapitalizeChoices = ['none' => true, 'sentences' => true, 'words' => true, 'characters' => true];
$contenteditableChoices = ['true' => true, 'false' => true, 'inherit' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$inputmodeChoices = ['none' => true, 'text' => true, 'decimal' => true, 'numeric' => true, 'email' => true, 'tel' => true, 'url' => true, 'search' => true];
$spellcheckChoices = ['true' => true, 'false' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaBusy) && isset($ariaBusyChoices[$ariaBusy])) $attrs[] = 'aria-busy="' . e($ariaBusy) . '"';
if (isset($ariaChecked) && isset($ariaCheckedChoices[$ariaChecked])) $attrs[] = 'aria-checked="' . e($ariaChecked) . '"';
if (isset($ariaControls)) $attrs[] = 'aria-controls="' . e($ariaControls) . '"';
if (isset($ariaCurrent) && isset($ariaCurrentChoices[$ariaCurrent])) $attrs[] = 'aria-current="' . e($ariaCurrent) . '"';
if (isset($ariaDescribedby)) $attrs[] = 'aria-describedby="' . e($ariaDescribedby) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaDisabled) && isset($ariaDisabledChoices[$ariaDisabled])) $attrs[] = 'aria-disabled="' . e($ariaDisabled) . '"';
if (isset($ariaExpanded) && isset($ariaExpandedChoices[$ariaExpanded])) $attrs[] = 'aria-expanded="' . e($ariaExpanded) . '"';
if (isset($ariaHaspopup) && isset($ariaHaspopupChoices[$ariaHaspopup])) $attrs[] = 'aria-haspopup="' . e($ariaHaspopup) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabel)) $attrs[] = 'aria-label="' . e($ariaLabel) . '"';
if (isset($ariaLabelledby)) $attrs[] = 'aria-labelledby="' . e($ariaLabelledby) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaPressed) && isset($ariaPressedChoices[$ariaPressed])) $attrs[] = 'aria-pressed="' . e($ariaPressed) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($autocapitalize) && isset($autocapitalizeChoices[$autocapitalize])) $attrs[] = 'autocapitalize="' . e($autocapitalize) . '"';
if (isset($autocorrect) && isset($autocorrectChoices[$autocorrect])) $attrs[] = 'autocorrect="' . e($autocorrect) . '"';
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($command)) $attrs[] = 'command="' . e($command) . '"';
if (isset($commandfor)) $attrs[] = 'commandfor="' . e($commandfor) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($disabled)) $attrs[] = 'disabled="' . e($disabled) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($form)) $attrs[] = 'form="' . e($form) . '"';
if (isset($formaction)) $attrs[] = 'formaction="' . e($formaction) . '"';
if (isset($formenctype) && isset($formenctypeChoices[$formenctype])) $attrs[] = 'formenctype="' . e($formenctype) . '"';
if (isset($formmethod) && isset($formmethodChoices[$formmethod])) $attrs[] = 'formmethod="' . e($formmethod) . '"';
if (isset($formnovalidate)) $attrs[] = 'formnovalidate="' . e($formnovalidate) . '"';
if (isset($formtarget) && isset($formtargetChoices[$formtarget])) $attrs[] = 'formtarget="' . e($formtarget) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($popovertarget)) $attrs[] = 'popovertarget="' . e($popovertarget) . '"';
if (isset($popovertargetaction) && isset($popovertargetactionChoices[$popovertargetaction])) $attrs[] = 'popovertargetaction="' . e($popovertargetaction) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
if (isset($type) && isset($typeChoices[$type])) $attrs[] = 'type="' . e($type) . '"';
if (isset($value)) $attrs[] = 'value="' . e($value) . '"';
@endphp
@section('button')
<button {!! implode(' ', $attrs) !!}>
  @yield('content')
</button>
@endsection
