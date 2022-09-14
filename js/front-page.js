var i = 1
let course = document.getElementsByClassName('courses')

function test(){

  course[i].style.display = 'block'
  
}
function next(){
  let limit = course.length
  
  if (i < limit-1){
  course[i].style.display = 'none'
  i = i + 1
  course[i].style.display = 'block'}
  document.querySelector('.preview').style.display = 'block'
  if(i == limit-1){
    document.querySelector('.next').style.display = 'none' 
  }

}
function preview(){
  
  if (i > 0){
    course[i].style.display = 'none'
    i = i - 1
    course[i].style.display = 'block'
  }
  document.querySelector('.next').style.display = 'block' 
  if(i == 0){
      document.querySelector('.preview').style.display = 'none' 
    }

}