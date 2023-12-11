function getPasswordStrength(password){

    if(password.length <=10){
        return "weak";
    }else if (password.length <=20){
        return "medium";
    }else{
        return "strong";
    }
}
