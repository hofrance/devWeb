particlesJS('particles-js', {
  particles: {
    number: {
      value: 80,
      density: {
        enable: true,
        value_area: 800 // Définit la densité des particules (nombre de particules par zone)
      }
    },
    color: {
      value: ['#ff0000', '#00ff00', '#0000ff', '#ffae00', '#00ffe5'] // Un tableau de couleurs pour des particules multicolores
    },
    shape: {
      type: 'circle', // La forme des particules ('circle', 'edge', 'triangle', 'polygon', 'star', 'image')
      stroke: {
        width: 0, // Largeur du bord des particules
        color: '#000000' // Couleur du bord des particules
      }
    },
    opacity: {
      value: 0.5, // Opacité des particules
      random: false, // Opacité aléatoire
      anim: {
        enable: false, // Animation d'opacité désactivée
        speed: 1, // Vitesse de l'animation d'opacité
        opacity_min: 0.1, // Opacité minimale pour l'animation
        sync: false // Si true, tous les changements d'opacité se produiront simultanément
      }
    },
    size: {
      value: 3, // Taille des particules
      random: true, // Taille aléatoire
      anim: {
        enable: false, // Animation de taille désactivée
        speed: 40, // Vitesse de l'animation de taille
        size_min: 0.1, // Taille minimale pour l'animation
        sync: false // Si true, tous les changements de taille se produiront simultanément
      }
    },
    line_linked: {
      enable: true, // Activer ou désactiver les lignes entre particules
      distance: 150, // Distance maximale pour la liaison
      color: '#ffffff', // Couleur des lignes
      opacity: 0.4, // Opacité des lignes
      width: 1 // Largeur des lignes
    },
    move: {
      enable: true, // Activer le mouvement des particules
      speed: 6, // Vitesse des particules
      direction: 'none', // Direction du mouvement ('none', 'top', 'top-right', 'right', 'bottom-right', 'bottom', 'bottom-left', 'left', 'top-left')
      random: false, // Mouvement aléatoire
      straight: false, // Mouvement direct (non aléatoire)
      out_mode: 'out', // Comportement en bordure de canvas ('out' pour sortir)
      attract: {
        enable: false, // Attraction des particules entre elles
        rotateX: 600, // Attraction horizontale
        rotateY: 1200 // Attraction verticale
      }
    }
  },
  interactivity: {
    detect_on: 'canvas', // Zone de détection ('canvas' ou 'window')
    events: {
      onhover: {
        enable: true,
        mode: 'repulse' // Effet au survol ('grab', 'bubble', 'repulse')
      },
      onclick: {
        enable: true,
        mode: 'push' // Effet au clic ('push', 'remove', 'bubble', 'repulse', 'pause')
      }
    },
    modes: {
      grab: {
        distance: 400, // Distance de l'effet 'grab'
        line_linked: {
          opacity: 1 // Opacité des lignes pour l'effet 'grab'
        }
      },
      bubble: {
        distance: 400, // Distance de l'effet 'bubble'
        size: 40, // Taille des bulles
        duration: 2, // Durée de l'effet 'bubble'
        opacity: 8, // Opacité des bulles
        speed: 3 // Vitesse des bulles
      },
      repulse: {
        distance: 200, // Distance de l'effet 'repulse'
        duration: 0.4 // Durée de l'effet 'repulse'
      },
      push: {
        particles_nb: 4 // Nombre de particules ajoutées au clic
      },
      remove: {
        particles_nb: 2 // Nombre de particules supprimées au clic
      }
    }
  },
  retina_detect: true // Adapte les particules pour les écrans retina
});

