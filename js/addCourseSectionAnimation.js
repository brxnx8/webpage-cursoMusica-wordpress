function addAnimationToSection(sectionIndex, animationDuration){
    console.log(sectionIndex)
    let section = document.getElementById("course" + sectionIndex)
    let delay = sectionIndex * animationDuration * 1000
    section.style.animationDelay = delay.toString() + "ms"
    section.style.zIndex = sectionIndex + 1
}

function addAnimationToCourses(numOfSections, animationDuration){
    for(let i = 0; i < numOfSections; i++){
        addAnimationToSection(i, animationDuration)
    }
}