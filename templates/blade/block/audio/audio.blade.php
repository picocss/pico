{{--
  This file is auto-generated.

  Audio - The audio element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the source element.

  @component audio
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$crossoriginChoices = ['anonymous' => true, 'use-credentials' => true];
$preloadChoices = ['auto' => true, 'metadata' => true, 'none' => true];
$roleChoices = ['alert' => true, 'application' => true, 'article' => true, 'banner' => true, 'button' => true, 'checkbox' => true, 'complementary' => true, 'contentinfo' => true, 'dialog' => true, 'form' => true, 'grid' => true, 'group' => true, 'heading' => true, 'img' => true, 'link' => true, 'list' => true, 'listbox' => true, 'listitem' => true, 'main' => true, 'menu' => true, 'menubar' => true, 'menuitem' => true, 'navigation' => true, 'none' => true, 'presentation' => true, 'radio' => true, 'region' => true, 'search' => true, 'status' => true, 'tab' => true, 'tablist' => true, 'tabpanel' => true, 'textbox' => true, 'toolbar' => true, 'tooltip' => true];
$ariaBusyChoices = ['true' => true, 'false' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$popoverChoices = ['auto' => true, 'hint' => true, 'manual' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaBusy) && isset($ariaBusyChoices[$ariaBusy])) $attrs[] = 'aria-busy="' . e($ariaBusy) . '"';
if (isset($ariaControls)) $attrs[] = 'aria-controls="' . e($ariaControls) . '"';
if (isset($ariaDescribedby)) $attrs[] = 'aria-describedby="' . e($ariaDescribedby) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabelledby)) $attrs[] = 'aria-labelledby="' . e($ariaLabelledby) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($autoplay)) $attrs[] = 'autoplay="' . e($autoplay) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($controls)) $attrs[] = 'controls="' . e($controls) . '"';
if (isset($crossorigin) && isset($crossoriginChoices[$crossorigin])) $attrs[] = 'crossorigin="' . e($crossorigin) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($loop)) $attrs[] = 'loop="' . e($loop) . '"';
if (isset($muted)) $attrs[] = 'muted="' . e($muted) . '"';
if (isset($popover) && isset($popoverChoices[$popover])) $attrs[] = 'popover="' . e($popover) . '"';
if (isset($preload) && isset($preloadChoices[$preload])) $attrs[] = 'preload="' . e($preload) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
@endphp
@section('audio')
<audio {!! implode(' ', $attrs) !!}>
  @yield('content')
</audio>
@endsection
