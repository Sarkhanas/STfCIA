function handleFormSubmit(event) {
  // Просим форму не отправлять данные самостоятельно
  event.preventDefault()
  console.log('Отправка!')
}

function serializeForm(formNode) {
  console.log(formNode.elements)
}

function handleFormSubmit(event) {
  event.preventDefault()
  serializeForm(applicantForm)
}

const applicantForm = document.getElementById('mars-once')
applicantForm.addEventListener('submit', handleFormSubmit)

function serializeForm(formNode) {
  const { elements } = formNode

  const data = Array.from(elements)
    .map((element) => {
      const { name, type } = element
      const value = type === 'checkbox' ? element.checked : element.value

      return { name, value }
    })
    .filter((item) => !!item.name)

  console.log(data)
}

function setCookie(name, value) {
  document.cookie = name + "=" + value;
}
function getCookie(name) {
  var r = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
  if (r) return r[2];
  else return "";
}
function deleteCookie(name) {
  var date = new Date(); // Берём текущую дату
  date.setTime(date.getTime() - 1); // Возвращаемся в "прошлое"
  document.cookie = name += "=; expires=" + date.toGMTString(); // Устанавливаем cookie пустое значение и срок действия до прошедшего уже времени
}

function toggleLoader() {
  const loader = document.getElementById('loader')
  loader.classList.toggle('hidden')
}

var re = /\(?\d{3}\)?([-\/\.])\d{3}\1\d{4}/;
      function testInfo(phoneInput){
        var OK = re.exec(phoneInput.value);
        if (!OK)
          window.alert(RegExp.input + " isn't a phone number with area code!");
        else
          window.alert("Thanks, your phone number is " + OK[0]);
      }

      function validate(){
        //Считаем значения из полей name и email в переменные x и y
        var x=document.forms['form']['name'].value;
        var y=document.forms['form']['email'].value;
        //Если поле name пустое выведем сообщение и предотвратим отправку формы
        if (x.length==0){
        document.getElementById(namef).innerHTML='*данное поле обязательно для заполнения';
        return false;
        }
        //Если поле email пустое выведем сообщение и предотвратим отправку формы
        if (y.length==0){
        document.getElementById('emailf').innerHTML='*данное поле обязательно для заполнения';
        return false;
        }
        //Проверим содержит ли значение введенное в поле email символы @ и .
        at=y.indexOf("@");
        dot=y.indexOf(".");
        //Если поле не содержит эти символы знач email введен не верно
        if (at<1 || dot<1){
        document.getElementById('emailf').innerHTML='*email введен не верно';
        return false;
        }}