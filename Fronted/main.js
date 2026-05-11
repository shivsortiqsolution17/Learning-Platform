 const track = document.getElementById('scrollTrack');
  const dots = document.querySelectorAll('.dot');
  const cardWidth = 296;
 
  function scrollToCard(i) {
    track.scrollTo({ left: i * cardWidth, behavior: 'smooth' });
  }
 
  track.addEventListener('scroll', () => {
    const i = Math.round(track.scrollLeft / cardWidth);
    dots.forEach((d, idx) => d.classList.toggle('active', idx === i));
  });
 
  let isDown = false, startX, scrollLeft;
  track.addEventListener('mousedown', e => { isDown = true; startX = e.pageX - track.offsetLeft; scrollLeft = track.scrollLeft; });
  track.addEventListener('mouseleave', () => isDown = false);
  track.addEventListener('mouseup', () => isDown = false);
  track.addEventListener('mousemove', e => {
    if (!isDown) return;
    e.preventDefault();
    track.scrollLeft = scrollLeft - (e.pageX - track.offsetLeft - startX) * 1.2;
  });


    