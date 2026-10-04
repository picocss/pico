{{--
  This file is auto-generated.

  A - The a element represents a hyperlink, linking to another resource.

  @component a
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$relChoices = ['alternate' => true, 'author' => true, 'bookmark' => true, 'canonical' => true, 'help' => true, 'icon' => true, 'license' => true, 'next' => true, 'nofollow' => true, 'noreferrer' => true, 'prefetch' => true, 'prev' => true, 'search' => true, 'stylesheet' => true, 'tag' => true];
$targetChoices = ['_blank' => true, '_parent' => true, '_self' => true, '_top' => true];
$roleChoices = ['button' => true, 'dialog' => true, 'link' => true, 'listitem' => true, 'menuitem' => true, 'none' => true, 'tooltip' => true];
$ariaCurrentChoices = ['false' => true, 'page' => true, 'step' => true, 'location' => true, 'date' => true, 'time' => true, 'true' => true];
$ariaBusyChoices = ['true' => true, 'false' => true];
$ariaDisabledChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$ariaExpandedChoices = ['false' => true, 'true' => true, 'undefined' => true];
$ariaHaspopupChoices = ['false' => true, 'true' => true, 'menu' => true, 'listbox' => true, 'tree' => true, 'grid' => true, 'dialog' => true];
$ariaPressedChoices = ['false' => true, 'true' => true, 'mixed' => true, 'undefined' => true];
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
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($download)) $attrs[] = 'download="' . e($download) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($href)) $attrs[] = 'href="' . e($href) . '"';
if (isset($hreflang)) $attrs[] = 'hreflang="' . e($hreflang) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($popover) && isset($popoverChoices[$popover])) $attrs[] = 'popover="' . e($popover) . '"';
if (isset($rel) && isset($relChoices[$rel])) $attrs[] = 'rel="' . e($rel) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($target) && isset($targetChoices[$target])) $attrs[] = 'target="' . e($target) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
if (isset($type)) $attrs[] = 'type="' . e($type) . '"';
@endphp
@section('a')
<a {!! implode(' ', $attrs) !!}>
  @yield('content')
</a>
@endsection
