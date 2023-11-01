const sections = {
    oquee: '## O que é?\nA trissomia 18, também conhecida como síndrome de Edwards, é uma condição genética rara em que a pessoa possui três cópias do cromossomo 18 em vez das duas normais.',
    problema: '## Problemas Gerados pela Trissomia18\nAlguns dos problemas gerados por essa condição são: malformações congênitas, problemas cardíacos, retardo no crescimento, problemas respiratórios, deficiência intelectual e dificuldades de alimentação. Devido à gravidade desses problemas, a expectativa de vida das pessoas com trissomia 18 é reduzida e normalmente não chegam na fase adulta.',
    curiosidades: '## Curiosidades\nA trissomia 18 é uma condição genética rara.<br>\nPode ser diagnosticada durante a gravidez por meio de exames pré-natais.<br>\nEm alguns casos raros, a trissomia 18 pode ser mosaica, com uma mistura de células afetadas e normais.<br>\nA condição não é hereditária, geralmente ocorre de forma aleatória.<br>\nAvanços na medicina têm permitido um maior cuidado de crianças com trissomia 18.<br>\nA trissomia 18 pode ser emocionalmente desafiadora para as famílias afetadas, e o apoio psicológico é importante.',
}

function renderContent(content) {
    const contentElement = document.getElementById('content')

    // Starts the fade animation
    contentElement.style.opacity = 0

    // Applies the content and returns the opacity after 200ms
    setTimeout(() => {
        contentElement.innerHTML = marked.parse(content)
        contentElement.style.opacity = 1
    }, 200);
}

function renderContentBySectionName(sectionName) {
    const section = sections[sectionName]
    renderContent(section)
}

function handleNavbar() {
    const buttons = document.querySelectorAll('nav button')

    // Handles every nav button when clicking
    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            renderContentBySectionName(
                button.getAttribute('data-section')
            )

            setTimeout(() => {
                window.location.href = '#content'
            }, 200);
        })
    })
}

renderContent(sections.oquee)
handleNavbar()