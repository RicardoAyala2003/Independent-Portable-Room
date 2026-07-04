import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")

if (document.querySelector("#render-navbar-here")) {
  const navbarRoot = ReactDOM.createRoot(document.querySelector("#render-navbar-here"))
  navbarRoot.render(<Navbar />)
}

if (document.querySelector("#render-footer-here")) {
  const footerRoot = ReactDOM.createRoot(document.querySelector("#render-footer-here"))
  footerRoot.render(<Footer />)
}

if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

// Reveal-on-scroll global — corre en cualquier página que tenga elementos
// .ipr-reveal-up/left/right/stagger, sin que cada template repita el observer.
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(
    ".ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger"
  )

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry, idx) {
      if (entry.isIntersecting) {
        const delay = entry.target.classList.contains("ipr-reveal-stagger") ? (idx % 6) * 60 : 0
        setTimeout(function () {
          entry.target.classList.add("is-visible")
        }, delay)
      }
    })
  }, { threshold: 0.12 })

  items.forEach(function (item) { observer.observe(item) })
})