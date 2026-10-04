{{--
  This file is auto-generated.

  Th - The th element represents a header cell in a table.

  @component th
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$roleChoices = ['alert' => true, 'application' => true, 'article' => true, 'banner' => true, 'button' => true, 'checkbox' => true, 'complementary' => true, 'contentinfo' => true, 'dialog' => true, 'form' => true, 'grid' => true, 'group' => true, 'heading' => true, 'img' => true, 'link' => true, 'list' => true, 'listbox' => true, 'listitem' => true, 'main' => true, 'menu' => true, 'menubar' => true, 'menuitem' => true, 'navigation' => true, 'none' => true, 'presentation' => true, 'radio' => true, 'region' => true, 'search' => true, 'status' => true, 'tab' => true, 'tablist' => true, 'tabpanel' => true, 'textbox' => true, 'toolbar' => true, 'tooltip' => true];
$ariaBusyChoices = ['true' => true, 'false' => true];
$ariaHiddenChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$ariaSortChoices = ['none' => true, 'ascending' => true, 'descending' => true, 'other' => true];
$autocapitalizeChoices = ['none' => true, 'sentences' => true, 'words' => true, 'characters' => true];
$contenteditableChoices = ['true' => true, 'false' => true, 'inherit' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$inputmodeChoices = ['none' => true, 'text' => true, 'decimal' => true, 'numeric' => true, 'email' => true, 'tel' => true, 'url' => true, 'search' => true];
$popoverChoices = ['auto' => true, 'hint' => true, 'manual' => true];
$spellcheckChoices = ['true' => true, 'false' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaBusy) && isset($ariaBusyChoices[$ariaBusy])) $attrs[] = 'aria-busy="' . e($ariaBusy) . '"';
if (isset($ariaColcount)) $attrs[] = 'aria-colcount="' . e($ariaColcount) . '"';
if (isset($ariaColindex)) $attrs[] = 'aria-colindex="' . e($ariaColindex) . '"';
if (isset($ariaColspan)) $attrs[] = 'aria-colspan="' . e($ariaColspan) . '"';
if (isset($ariaControls)) $attrs[] = 'aria-controls="' . e($ariaControls) . '"';
if (isset($ariaDescribedby)) $attrs[] = 'aria-describedby="' . e($ariaDescribedby) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaHidden) && isset($ariaHiddenChoices[$ariaHidden])) $attrs[] = 'aria-hidden="' . e($ariaHidden) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabelledby)) $attrs[] = 'aria-labelledby="' . e($ariaLabelledby) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($ariaRowcount)) $attrs[] = 'aria-rowcount="' . e($ariaRowcount) . '"';
if (isset($ariaRowindex)) $attrs[] = 'aria-rowindex="' . e($ariaRowindex) . '"';
if (isset($ariaRowspan)) $attrs[] = 'aria-rowspan="' . e($ariaRowspan) . '"';
if (isset($ariaSort) && isset($ariaSortChoices[$ariaSort])) $attrs[] = 'aria-sort="' . e($ariaSort) . '"';
if (isset($autocapitalize) && isset($autocapitalizeChoices[$autocapitalize])) $attrs[] = 'autocapitalize="' . e($autocapitalize) . '"';
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($colspan)) $attrs[] = 'colspan="' . e($colspan) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($headers)) $attrs[] = 'headers="' . e($headers) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($popover) && isset($popoverChoices[$popover])) $attrs[] = 'popover="' . e($popover) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($rowspan)) $attrs[] = 'rowspan="' . e($rowspan) . '"';
if (isset($scope)) $attrs[] = 'scope="' . e($scope) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
@endphp
@section('th')
<th {!! implode(' ', $attrs) !!}>
  @yield('content')
</th>
@endsection
