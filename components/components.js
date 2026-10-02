async function loadComponent(containerId,filePath){
	const container=document.getElementById(containerId);
	if(!container){
		console.error(`Container not found: #${containerId}`);
		return false;
	}
	try{
		console.log(`Loading: ${filePath}`);
		const response=await fetch(filePath);
		if(!response.ok){
			throw new Error(`HTTP ${response.status} - ${response.statusText}`);
		}
		const html=await response.text();
		if(!html.trim()){
			throw new Error(`${filePath} is empty`);
		}
		container.innerHTML=html;
		console.log(`Loaded successfully: ${filePath}`);
		return true;
	}catch(error){
		console.error(`Failed to load ${filePath}:`,error);
		container.innerHTML="";
		return false;
	}
}
async function loadComponents(){
	const sidebarLoaded=await loadComponent("sidebarContainer","components/sidebar.html");
	const headerLoaded=await loadComponent("headerContainer","components/header.html");
	console.log("Components loaded:",{
		sidebar:sidebarLoaded,
		header:headerLoaded
	});
}
function initializeComponents(){
	if(window.lucide){
		lucide.createIcons();
	}
	document.querySelectorAll(".menu-title").forEach(button=>{
		button.addEventListener("click",()=>{
			const menuGroup=button.closest(".menu-group");
			if(menuGroup){
				menuGroup.classList.toggle("open");
			}
		});
	});
	setActivePage();
	setPageTitle();
}
function setActivePage(){
	const currentPage=window.location.pathname.split("/").pop().toLowerCase();
	document.querySelectorAll(".sidebar-nav a").forEach(link=>{
		const linkPage=link.getAttribute("href");
		if(!linkPage)return;
		if(linkPage.toLowerCase()===currentPage){
			link.classList.add("active");
			const menuGroup=link.closest(".menu-group");
			if(menuGroup){
				menuGroup.classList.add("open");
				const menuTitle=menuGroup.querySelector(".menu-title");
				if(menuTitle){
					menuTitle.classList.add("active");
				}
			}
		}
	});
}
function setPageTitle(){
	const pageTitle=document.getElementById("pageTitle");
	if(!pageTitle)return;
	const titles={
		"dashboard.html":"Dashboard",
		"news.html":"News",
		"posts.html":"Posts",
		"academics.html":"Academics",
		"executive-officials.html":"Executive Officials",
		"board-of-regents.html":"Board of Regents",
		"about-us.html":"About Us",
		"campuses.html":"Campuses",
		"contact-information.html":"Contact Information",
		"quick-links.html":"Quick Links",
		"e-services.html":"E-Services",
		"archive.html":"Archive",
		"password.html":"Password",
		"logout.html":"Logout"
	};
	const currentPage=window.location.pathname.split("/").pop().toLowerCase();
	if(titles[currentPage]){
		pageTitle.textContent=titles[currentPage];
	}
}