$(function(){
	var rules = {
			"name"	:	{required : true},
			"name_kana"	:	{required : true},
			"zip"	:	{required : true},
			"pref"	:	{required : true},
			"address1"	:	{required : true},
			"address2"	:	{required : true},
			"tel"	:	{required : true},
			"email"	:	{required : true, email : true},
			"email_confirm"	:	{required : true, email : true, equalTo:'[name="email"]'},
			"area"	:	{required : true}
			};

	var msg = {
		"name" : {
			required : "担当者名を入力してください"
		},
		"name_kana" : {
			required : "ふりがなを入力してください"
		},
		"zip" : {
			required : "郵便番号を入力してください"
		},
		"pref" : {
			required : "都道府県を入力してください"
		},
		"address1" : {
			required : "住所（市区町村）を入力してください"
		},
		"address2" : {
			required : "住所（番地・建物）を入力してください"
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
		},
		"area" : {
			required : "施工可能エリアを入力してください"
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