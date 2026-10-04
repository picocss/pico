{{--
  This file is auto-generated.

  Img - The img element represents an image.

  @component img
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$crossoriginChoices = ['anonymous' => true, 'use-credentials' => true];
$decodingChoices = ['async' => true, 'auto' => true, 'sync' => true];
$referrerpolicyChoices = ['no-referrer' => true, 'no-referrer-when-downgrade' => true, 'origin' => true, 'origin-when-cross-origin' => true, 'same-origin' => true, 'strict-origin' => true, 'strict-origin-when-cross-origin' => true, 'unsafe-url' => true];
$ariaHiddenChoices = ['false' => true, 'true' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($alt)) $attrs[] = 'alt="' . e($alt) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaHidden) && isset($ariaHiddenChoices[$ariaHidden])) $attrs[] = 'aria-hidden="' . e($ariaHidden) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabel)) $attrs[] = 'aria-label="' . e($ariaLabel) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($crossorigin) && isset($crossoriginChoices[$crossorigin])) $attrs[] = 'crossorigin="' . e($crossorigin) . '"';
if (isset($decoding) && isset($decodingChoices[$decoding])) $attrs[] = 'decoding="' . e($decoding) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($height)) $attrs[] = 'height="' . e($height) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($ismap)) $attrs[] = 'ismap="' . e($ismap) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($referrerpolicy) && isset($referrerpolicyChoices[$referrerpolicy])) $attrs[] = 'referrerpolicy="' . e($referrerpolicy) . '"';
if (isset($sizes)) $attrs[] = 'sizes="' . e($sizes) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($srcset)) $attrs[] = 'srcset="' . e($srcset) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($usemap)) $attrs[] = 'usemap="' . e($usemap) . '"';
if (isset($width)) $attrs[] = 'width="' . e($width) . '"';
@endphp
@section('img')
<img {!! implode(' ', $attrs) !!} />
@endsection
