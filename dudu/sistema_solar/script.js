const planets = document.querySelectorAll('.planet')
const p_radii = [22,33,50,70,112,138,165,190]
let p_radians = new Array(8).fill(0)
const p_velocities = [1.607, 1.174,1,0.802, 0.434, 0.323, 0.228, 0.182]

const moon = document.querySelector('#moon')
const m_radius = 8
let m_radians = 0
const m_velocity = 10

const p_orbits = document.querySelectorAll('.p-orbit')
const m_orbit = document.querySelector('#m-orbit')

p_orbits.forEach((p_orbit, index)=>{
  p_orbit.style.height = `${p_radii[index]}vmin`
  p_orbit.style.width = `${p_radii[index]}vmin`
})

setInterval( ()=> {
  planets.forEach( (planet, index)=>{
    planet.style.left = `${Math.cos(p_radians[index]) * p_radii[index]}vmin`
    planet.style.top = `${Math.sin(p_radians[index]) * p_radii[index]}vmin`
    p_radians[index] += p_velocities[index] * 0.02
  })

  moon.style.left = `${earthX() + (Math.cos(m_radians) * m_radius )}vmin`
  moon.style.top = `${earthY() + (Math.sin(m_radians) * m_radius )}vmin`
  m_radians += m_velocity * 0.02

  m_orbit.style.left = `${earthX()}vmin`
  m_orbit.style.top = `${earthY()}vmin`
}, 1000/60)

function earthX(){
  return Number( planets[2].style.left.split('vmin')[0] )
}

function earthY(){
  return Number( planets[2].style.top.split('vmin')[0] )
}