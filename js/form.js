$(function(){
	var rules = {
			"company"	:	{required : true},
			"name"	:	{required : true},
			"zip1"	:	{required : true},
			"zip2"	:	{required : true},
			"pref"	:	{required : true},
			"address"	:	{required : true},
			"tel"	:	{required : true},
			"email"	:	{required : true, email : true},
			"email_confirm"	:	{required : true, email : true, equalTo:'[name="email"]'}
			};

	var msg = {
		"company" : {
			required : "会社名を入力してください"
		},
		"name" : {
			required : "お名前を入力してください"
		},
		"zip1" : {
			required : "郵便番号を入力してください"
		},
		"zip2" : {
			required : "郵便番号を入力してください"
		},
		"pref" : {
			required : "都道府県を入力してください"
		},
		"address" : {
			required : "住所を入力してください"
		},
		"tel" : {
			required : "電話番号を入力してください"
		},
		"email" :{
			required : "メールアドレスを入力してください",
			email : "正しいメールアドレスではありません"
		},
		"email_confirm" :{
			required : "メールアドレスを入力してください",
			email : "正しいメールアドレスではありません",
			equalTo : "メールアドレスが一致しません"
		}
	};

	$('.validatorForm').validate({
		errorClass: "form-error",
		errorElement: "p",
		errorPlacement: function(error, element) {
		element.parents("td").find(".error_message").remove();
			element.parents("td").append(error);
	},
		onfocusout : function(elem){
			this.element(elem);
		},
		onkeyup : function(elem){
			this.element(elem);
		},
		highlight: function( element, errorClass, validClass ) {
			$(element).addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function( element, errorClass, validClass ) {
			$(element).removeClass(errorClass).addClass(validClass);
			$(element).parents("td").find(".error_message").remove();
		},
		rules : rules,
		messages : msg
	});
});