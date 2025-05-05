// Shared category functionality
const categories = {
    technology: {
        name: 'Technology',
        icon: 'bi-laptop',
        color: '#3498db'
    },
    lifestyle: {
        name: 'Lifestyle',
        icon: 'bi-heart',
        color: '#e74c3c'
    },
    business: {
        name: 'Business',
        icon: 'bi-briefcase',
        color: '#2ecc71'
    },
    science: {
        name: 'Science',
        icon: 'bi-flask',
        color: '#9b59b6'
    },
    food: {
        name: 'Food',
        icon: 'bi-cup-hot',
        color: '#f1c40f'
    }
};

// Function to initialize category filters
function initializeCategoryFilters() {
    const filterSection = document.querySelector('.filter-section');
    if (!filterSection) return;

    // Clear existing filters
    filterSection.innerHTML = '';

    // Add "All" filter
    const allButton = document.createElement('button');
    allButton.className = 'filter-btn active';
    allButton.setAttribute('data-filter', 'all');
    allButton.innerHTML = '<i class="bi bi-grid"></i> All';
    filterSection.appendChild(allButton);

    // Add category filters
    Object.entries(categories).forEach(([key, category]) => {
        const button = document.createElement('button');
        button.className = 'filter-btn';
        button.setAttribute('data-filter', key);
        button.innerHTML = `<i class="bi ${category.icon}"></i> ${category.name}`;
        button.style.borderColor = category.color;
        button.style.color = category.color;
        button.onmouseover = () => {
            button.style.backgroundColor = category.color;
            button.style.color = 'white';
        };
        button.onmouseout = () => {
            if (!button.classList.contains('active')) {
                button.style.backgroundColor = 'transparent';
                button.style.color = category.color;
            }
        };
        filterSection.appendChild(button);
    });

    // Add event listeners
    const filterButtons = filterSection.querySelectorAll('.filter-btn');
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-filter');
            filterContent(category);
            
            // Update active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Store selected category
            localStorage.setItem('selectedCategory', category);
        });
    });

    // Restore last selected category
    const lastCategory = localStorage.getItem('selectedCategory');
    if (lastCategory) {
        const lastButton = filterSection.querySelector(`[data-filter="${lastCategory}"]`);
        if (lastButton) {
            lastButton.click();
        }
    }
}

// Function to filter content based on category
function filterContent(category) {
    const cards = document.querySelectorAll('.article-card, .magazine-card');
    cards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Function to navigate between articles and magazines
function navigateToCategory(category, targetPage) {
    localStorage.setItem('selectedCategory', category);
    window.location.href = targetPage;
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initializeCategoryFilters();
}); 