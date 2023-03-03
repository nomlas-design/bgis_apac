class Navbar {
  constructor() {
    this.dropdownBtn = document.querySelector('.btn-region');
    this.dropdownContent = document.querySelector('.nav-popout');

    this.search = document.querySelector('.search');
    this.searchOpen = document.querySelector('.nav__search');
    this.searchClose = document.querySelector('.search__close');
    this.body = document.querySelector('body');
    this.events();
  }

  events() {
    this.dropdownBtn.addEventListener('click', this.toggleDropdown.bind(this));
    this.dropdownContent.addEventListener(
      'click',
      this.stopPropagation.bind(this)
    );

    this.searchOpen.addEventListener('click', this.toggleSearch.bind(this));
    this.searchClose.addEventListener('click', this.toggleSearch.bind(this));
  }

  toggleDropdown() {
    this.dropdownContent.classList.contains('nav-popout--active')
      ? this.closeDropdown()
      : this.openDropdown();
  }

  openDropdown(e) {
    this.dropdownContent.classList.add('nav-popout--active');
    this.documentClickHandler = this.closeDropdown.bind(this);
    setTimeout(() => {
      document.addEventListener('click', this.documentClickHandler);
    }, 0);
  }

  closeDropdown(e) {
    if (e && e.target.closest('.nav-popout')) return;
    this.dropdownContent.classList.remove('nav-popout--active');
    document.removeEventListener('click', this.documentClickHandler);
  }

  stopPropagation(e) {
    e.stopPropagation();
  }

  toggleSearch() {
    console.log(this.search.style.display);
    if (this.search.style.display === 'none') {
      this.search.style.display = 'flex';
      this.body.overflowY = 'hidden';
    } else {
      this.search.style.display = 'none';
      this.body.overflowY = 'visible';
    }
  }
}

export default Navbar;
