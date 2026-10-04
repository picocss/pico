{{--
  This file is auto-generated.

  Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.

  @component form
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$autocompleteChoices = ['off' => true, 'on' => true];
$autocorrectChoices = ['off' => true, 'on' => true];
$enctypeChoices = ['application/x-www-form-urlencoded' => true, 'multipart/form-data' => true, 'text/plain' => true];
$methodChoices = ['get' => true, 'post' => true, 'dialog' => true];
$targetChoices = ['_self' => true, '_blank' => true, '_parent' => true, '_top' => true];
$ariaInvalidChoices = ['false' => true, 'true' => true, 'grammar' => true, 'spelling' => true];
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($acceptCharset)) $attrs[] = 'accept-charset="' . e($acceptCharset) . '"';
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($action)) $attrs[] = 'action="' . e($action) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaInvalid) && isset($ariaInvalidChoices[$ariaInvalid])) $attrs[] = 'aria-invalid="' . e($ariaInvalid) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLabel)) $attrs[] = 'aria-label="' . e($ariaLabel) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($autocomplete) && isset($autocompleteChoices[$autocomplete])) $attrs[] = 'autocomplete="' . e($autocomplete) . '"';
if (isset($autocorrect) && isset($autocorrectChoices[$autocorrect])) $attrs[] = 'autocorrect="' . e($autocorrect) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($enctype) && isset($enctypeChoices[$enctype])) $attrs[] = 'enctype="' . e($enctype) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($method) && isset($methodChoices[$method])) $attrs[] = 'method="' . e($method) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($novalidate)) $attrs[] = 'novalidate="' . e($novalidate) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($target) && isset($targetChoices[$target])) $attrs[] = 'target="' . e($target) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
@endphp
@section('form')
<form {!! implode(' ', $attrs) !!}>
  @yield('content')
</form>
@endsection
