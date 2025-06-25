// import './bootstrap';

const mobileMenuToggle = document.querySelector('#mobile-menu-toggle')
const mobileMenuList = document.querySelector('#mobile-menu-list')
const whatsapp = document.querySelector('#whatsapp-button')

if (mobileMenuList && mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', e => {
        mobileMenuList.classList.add('!block')
        document.body.classList.add('overflow-hidden')
        // whatsapp.classList.add('hidden')
        // whatsapp.classList.add('md:block')
    })

    const mobileMenuHidden = document.querySelector('#mobile-menu-hidden');

    mobileMenuHidden.addEventListener('click', e => {
        mobileMenuList.classList.remove('!block')
        document.body.classList.remove('overflow-hidden')
        // whatsapp.classList.remove('hidden')
        // whatsapp.classList.remove('md:block')
    })
}

const travelSearch = document.querySelector('#cari-travel')
const agentSearch = document.querySelector('#cari-agen')
const replaceSearch = document.querySelectorAll('.search a')
replaceSearch.forEach(e => {
    e.addEventListener('click', (a) => {
        const id = a.target.id;

        if (id == 'cari-agen') {
            travelSearch.classList.toggle('!grid')
            agentSearch.classList.toggle('!hidden')

        } else {
            agentSearch.classList.toggle('!grid')
            travelSearch.classList.toggle('!hidden')
        }
    })
});




