{{--
  This file is auto-generated.

  Iframe - The iframe element represents a nested browsing context, effectively embedding another HTML page into the current page.

  @component iframe
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$referrerpolicyChoices = ['no-referrer' => true, 'no-referrer-when-downgrade' => true, 'origin' => true, 'origin-when-cross-origin' => true, 'same-origin' => true, 'strict-origin' => true, 'strict-origin-when-cross-origin' => true, 'unsafe-url' => true];
$roleChoices = ['alert' => true, 'application' => true, 'article' => true, 'banner' => true, 'button' => true, 'checkbox' => true, 'complementary' => true, 'contentinfo' => true, 'dialog' => true, 'form' => true, 'grid' => true, 'group' => true, 'heading' => true, 'img' => true, 'link' => true, 'list' => true, 'listbox' => true, 'listitem' => true, 'main' => true, 'menu' => true, 'menubar' => true, 'menuitem' => true, 'navigation' => true, 'none' => true, 'presentation' => true, 'radio' => true, 'region' => true, 'search' => true, 'status' => true, 'tab' => true, 'tablist' => true, 'tabpanel' => true, 'textbox' => true, 'toolbar' => true, 'tooltip' => true];
$ariaBusyChoices = ['true' => true, 'false' => true];
$ariaHiddenChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$popoverChoices = ['auto' => true, 'hint' => true, 'manual' => true];
$attrs = [];
if (isset($allowfullscreen)) $attrs[] = 'allowfullscreen="' . e($allowfullscreen) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaBusy) && isset($ariaBusyChoices[$ariaBusy])) $attrs[] = 'aria-busy="' . e($ariaBusy) . '"';
if (isset($ariaControls)) $attrs[] = 'aria-controls="' . e($ariaControls) . '"';
if (isset($ariaDescribedby)) $attrs[] = 'aria-describedby="' . e($ariaDescribedby) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaHidden) && isset($ariaHiddenChoices[$ariaHidden])) $attrs[] = 'aria-hidden="' . e($ariaHidden) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabel)) $attrs[] = 'aria-label="' . e($ariaLabel) . '"';
if (isset($ariaLabelledby)) $attrs[] = 'aria-labelledby="' . e($ariaLabelledby) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($height)) $attrs[] = 'height="' . e($height) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($popover) && isset($popoverChoices[$popover])) $attrs[] = 'popover="' . e($popover) . '"';
if (isset($referrerpolicy) && isset($referrerpolicyChoices[$referrerpolicy])) $attrs[] = 'referrerpolicy="' . e($referrerpolicy) . '"';
if (isset($role) && isset($roleChoices[$role])) $attrs[] = 'role="' . e($role) . '"';
if (isset($sandbox)) $attrs[] = 'sandbox="' . e($sandbox) . '"';
if (isset($seamless)) $attrs[] = 'seamless="' . e($seamless) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($srcdoc)) $attrs[] = 'srcdoc="' . e($srcdoc) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($width)) $attrs[] = 'width="' . e($width) . '"';
@endphp
@section('iframe')
<iframe {!! implode(' ', $attrs) !!}>
  @yield('content')
</iframe>
@endsection
