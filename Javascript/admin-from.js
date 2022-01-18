// --------------------------------------------------------------------------------------------


// Student Tab Switch:-
function showTime(index) {
    const tabs = document.querySelectorAll('main div.tabs-div');
    const buttons = document.querySelectorAll('.bar-container .bar ul li span');
    const buttons_bar = document.querySelectorAll('.bar-container .bar ul li div');

    buttons.forEach(function(e) {
        e.style.color = "";
    })
    buttons[index].style.color = "rgb(0, 183, 255)";

    buttons_bar.forEach(function(e) {
        e.style.visibility = "";
        e.style.bottom = "";
    })
    buttons_bar[index].style.visibility = "visible";
    buttons_bar[index].style.bottom = "-.5rem";

    tabs.forEach(function(e) {
        e.style.right = "-100vw";
    })
    tabs[index].style.right = "0";
}
showTime(0);


// --------------------------------------------------------------------------------------------


// Student Form Validation:-
const form = document.querySelector('.add-form');

const student_id = document.getElementById('student_id');
const f_name = document.getElementById('f_name');
const l_name = document.getElementById('l_name');
const instituted = document.getElementById('instituted2');
const batch = document.getElementById('batch2');
const session = document.getElementById('session');
const sem = document.getElementById('semester');
const DOB = document.getElementById('DOB');
const blood_group = document.getElementById('blood_group');
const category = document.getElementById('category');
const gender = document.getElementById('gender');
const s_number = document.getElementById('s_number');
const s_email = document.getElementById('s_email');
const address = document.getElementById('address');
const city = document.getElementById('city');
const state = document.getElementById('state');
const pin_code = document.getElementById('pin');
const registration_date = document.getElementById('registration_date');
const img = document.getElementById('image');

form.addEventListener('submit', (e) => {
    if (checkInput()) {
        e.preventDefault();
    }
})
var numberValidation = /^[0-9]+$/;
var emailValidation = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
function checkInput() {
    let result = true;

    if(student_id.value === '' || student_id.value == null){
        result = setError(student_id);
    }else if(student_id.value.match(numberValidation)){
        result = setSuccess(student_id);
    }else{
        result = setError(student_id);
    }
    if(f_name.value === '' || f_name.value == null){
        result = setError(f_name);
    }else{
        result = setSuccess(f_name);
    }
    if(l_name.value === '' || l_name.value == null){
        result = setError(l_name);
    }else{
        result = setSuccess(l_name);
    }
    if(instituted.value === '' || instituted.value == null){
        result = setError(instituted);
    }else{
        result = setSuccess(instituted);
    }
    if(batch.value === '' || batch.value == null){
        result = setError(batch);
    }else{
        result = setSuccess(batch);
    }
    if(session.value === '' || session.value == null){
        result = setError(session);
    }else{
        result = setSuccess(session);
    }
    if(sem.value === '' || sem.value == null){
        result = setError(sem);
    }else{
        result = setSuccess(sem);
    }
    if(DOB.value === '' || DOB.value == null){
        result = setError(DOB);
    }else{
        result = setSuccess(DOB);
    }
    if(blood_group.value === '' || blood_group.value == null){
        result = setError(blood_group);
    }else{
        result = setSuccess(blood_group);
    }
    if(category.value === '' || category.value == null){
        result = setError(category);
    }else{
        result = setSuccess(category);
    }
    if(category.value === '' || category.value == null){
        result = setError(category);
    }else{
        result = setSuccess(category);
    }
    if(gender.value === '' || gender.value == null){
        result = setError(gender);
    }else{
        result = setSuccess(gender);
    }
    if(s_number.value === '' || s_number.value == null){
        result = setError(s_number);
    }else{
        result = setError(s_number);
    }
    if(s_email.value === '' || s_email.value == null){
        result = setError(s_email);
    }else if(s_email.value.match(emailValidation)){
        result = setSuccess(s_email);
    }else{
        result = setError(s_email);
    }
    if(address.value === '' || address.value == null){
        result = setError(address);
    }else{
        result = setSuccess(address);
    }
    if(city.value === '' || city.value == null){
        result = setError(city);
    }else{
        result = setSuccess(city);
    }
    if(state.value === '' || state.value == null){
        result = setError(state);
    }else{
        result = setSuccess(state);
    }
    if(pin_code.value === '' || pin_code.value == null){
        result = setError(pin_code);
    }else{
        result = setSuccess(pin_code);
    }
    if(registration_date.value === '' || registration_date.value == null){
        result = setError(registration_date);
    }else{
        result = setSuccess(registration_date);
    }
    if(img.value === '' || img.value == null){
        result = setError(img);
    }else{
        result = setSuccess(img);
    }

    return result;
}

function setError(input){
    input.className = "error";
    return true;
}
function setSuccess(input){
    input.className = "success";
    return false;
}

function focusOut(){

    student_id.addEventListener('focusout', ()=>{
        if(student_id.value === '' || student_id.value == null){
            result = setError(student_id);
        }else if(student_id.value.match(numberValidation)){
            result = setSuccess(student_id);
        }else{
            result = setError(student_id);
        }
    })
    f_name.addEventListener('focusout', ()=>{
        if(f_name.value === '' || f_name.value == null){
            result = setError(f_name);
        }else{
            result = setSuccess(f_name);
        }
    })
    l_name.addEventListener('focusout', ()=>{
        if(l_name.value === '' || l_name.value == null){
            result = setError(l_name);
        }else{
            result = setSuccess(l_name);
        }
    })
    instituted.addEventListener('focusout', ()=>{
        if(instituted.value === '' || instituted.value == null){
            result = setError(instituted);
        }else{
            result = setSuccess(instituted);
        }
    })
    batch.addEventListener('focusout', ()=>{
        if(batch.value === '' || batch.value == null){
        result = setError(batch);
        }else{
        result = setSuccess(batch);
        }
    })
    session.addEventListener('focusout', ()=>{
        if(session.value === '' || session.value == null){
            result = setError(session);
        }else{
            result = setSuccess(session);
        }
    })
    sem.addEventListener('focusout', ()=>{
        if(sem.value === '' || sem.value == null){
            result = setError(sem);
        }else{
            result = setSuccess(sem);
        }
    })
    DOB.addEventListener('focusout', ()=>{
        if(DOB.value === '' || DOB.value == null){
            result = setError(DOB);
        }else{
            result = setSuccess(DOB);
        }
    })
    blood_group.addEventListener('focusout', ()=>{
        if(blood_group.value === '' || blood_group.value == null){
            result = setError(blood_group);
        }else{
            result = setSuccess(blood_group);
        }
    })
    category.addEventListener('focusout', ()=>{
        if(category.value === '' || category.value == null){
            result = setError(category);
        }else{
            result = setSuccess(category);
        }
    })
    gender.addEventListener('focusout', ()=>{
        if(gender.value === '' || gender.value == null){
            result = setError(gender);
        }else{
            result = setSuccess(gender);
        }
    })
    s_number.addEventListener('focusout', ()=>{
        if(s_number.value === '' || s_number.value == null){
            result = setError(s_number);
        }else if(s_number.value.match(numberValidation)){
            if(s_number.value.length <10 || s_number.value.length >10){
                result = setError(s_number);
            }else{
                result = setSuccess(s_number);
            }
        }else{
            result = setError(s_number);
        }
    })
    s_email.addEventListener('focusout', ()=>{
        if(s_email.value === '' || s_email.value == null){
            result = setError(s_email);
        }else if(s_email.value.match(emailValidation)){
            result = setSuccess(s_email);
        }else{
            result = setError(s_email);
        }
    })
    address.addEventListener('focusout', ()=>{
        if(address.value === '' || address.value == null){
            result = setError(address);
        }else{
            result = setSuccess(address);
        }
    })
    city.addEventListener('focusout', ()=>{
        if(city.value === '' || city.value == null){
            result = setError(city);
        }else{
            result = setSuccess(city);
        }
    })
    state.addEventListener('focusout', ()=>{
        if(state.value === '' || state.value == null){
            result = setError(state);
        }else{
            result = setSuccess(state);
        }
    })
    pin_code.addEventListener('focusout', ()=>{
        if(pin_code.value === '' || pin_code.value == null){
            result = setError(pin_code);
        }else if(pin_code.value.match(numberValidation)){
            if(pin_code.value.length <6 || pin_code.value.length >6){
                result = setError(pin_code);
            }else{
                result = setSuccess(pin_code);
            }
        }else{
            result = setError(pin_code);
        }
    })
    registration_date.addEventListener('focusout', ()=>{
        if(registration_date.value === '' || registration_date.value == null){
            result = setError(registration_date);
        }else{
            result = setSuccess(registration_date);
        }
    })
    img.addEventListener('focusout', ()=>{
        if(img.value === '' || img.value == null){
            result = setError(img);
        }else{
            result = setSuccess(img);
        }
    })

}
focusOut();

// --------------------------------------------------------------------------------------------
