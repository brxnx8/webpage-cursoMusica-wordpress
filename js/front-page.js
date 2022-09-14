var i = 0
let course = document.getElementsByClassName('courses')

function next(){
  let limit = course.length

  if (i < limit-1){
    course[i].style.display = 'none'
    i = i + 1
    course[i].style.display = 'block'
  }
  else if(i == limit - 1){
    course[i].style.display = 'none'
    i = 0
    course[i].style.display = 'block'
  } 
}

function preview(){
  let limit = course.length
  if (i > 0){
    course[i].style.display = 'none'
    i = i - 1
    course[i].style.display = 'block'
  }
  else if(i == 0){
    course[i].style.display = 'none'
    i = limit - 1
    course[i].style.display = 'block'
  }
}