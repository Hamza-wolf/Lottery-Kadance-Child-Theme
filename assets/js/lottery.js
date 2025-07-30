/**
 * Lottery Results Theme JavaScript
 * Handles interactive functionality for the lottery results display
 * Including dark mode and check my numbers feature
 */

/**
 * Show game information modal
 */
function showGameInfo(gameType) {
    // Create modal overlay
    var modal = jQuery("<div class=\"lottery-modal-overlay\"></div>");
    var modalContent = jQuery("<div class=\"lottery-modal-content\"></div>");
    
    // Game-specific information
    var gameInfo = getGameInformation(gameType);
    
    modalContent.html(
        "<div class=\"lottery-modal-header\">" +
        "<h3>" + gameInfo.title + "</h3>" +
        "<button class=\"lottery-modal-close\">&times;</button>" +
        "</div>" +
        "<div class=\"lottery-modal-body\">" +
        gameInfo.content +
        "</div>"
    );
    modal.append(modalContent);
    jQuery("body").append(modal);
    
    // Show modal with animation
    modal.fadeIn(300);
    
    // Close modal functionality
    modal.on("click", function(e) {
        if (e.target === this || jQuery(e.target).hasClass("lottery-modal-close")) {
            modal.fadeOut(300, function() {
                modal.remove();
            });
        }
    });
}

/**
 * Get game information content
 */
function getGameInformation(gameType) {
    var gameData = {
        "euromillions": {
            title: "EuroMillions Information",
            content: "<p>EuroMillions is a transnational lottery requiring seven correct numbers to win the jackpot.</p>" +
                    "<p><strong>How to play:</strong> Choose 5 numbers from 1-50 and 2 Lucky Stars from 1-12.</p>" +
                    "<p><strong>Draws:</strong> Tuesday and Friday evenings.</p>" +
                    "<p><strong>Minimum jackpot:</strong> €17 million</p>"
        },
        "primitiva": {
            title: "La Primitiva Information",
            content: "<p>La Primitiva is Spain\"s original lottery game, running since 1763.</p>" +
                        "<p><strong>How to play:</strong> Choose 6 numbers from 1-49.</p>" +
                        "<p><strong>Draws:</strong> Monday, Thursday, and Saturday.</p>" +
                        "<p><strong>Additional games:</strong> Joker and Reintegro</p>"
        },
        "bonoloto": {
            title: "Bonoloto Information",
            content: "<p>Bonoloto is a daily lottery game with affordable tickets.</p>" +
                        "<p><strong>How to play:</strong> Choose 6 numbers from 1-49.</p>" +
                        "<p><strong>Draws:</strong> Monday through Saturday.</p>" +
                        "<p><strong>Special feature:</strong> Complementary number and Reintegro</p>"
        },
        "elgordo": {
            title: "El Gordo Information",
            content: "<p>El Gordo de la Primitiva offers large jackpots every Sunday.</p>" +
                        "<p><strong>How to play:</strong> Choose 5 numbers from 1-54 and 1 key number from 0-9.</p>" +
                        "<p><strong>Draws:</strong> Every Sunday.</p>" +
                        "<p><strong>Minimum jackpot:</strong> €5 million</p>"
        },
        "eurodreams": {
            title: "EuroDreams Information",
            content: "<p>EuroDreams offers a unique monthly prize for 30 years.</p>" +
                        "<p><strong>How to play:</strong> Choose 6 numbers from 1-40 and 1 Dream number from 1-5.</p>" +
                        "<p><strong>Draws:</strong> Monday and Thursday.</p>" +
                        "<p><strong>Top prize:</b> €20,000 per month for 30 years</p>"
        },
        "lototurf": {
            title: "Lototurf Information",
            content: "<p>Lototurf combines lottery with horse racing excitement.</p>" +
                        "<p><strong>How to play:</strong> Choose 6 numbers from 1-40 and 1 horse from 1-10.</p>" +
                        "<p><strong>Draws:</strong> Thursday and Sunday.</p>" +
                        "<p><strong>Special feature:</strong> Horse racing theme with Reintegro</p>"
        },
        "quintupleplus": {
            title: "Quintuple Plus Information",
            content: "<p>Quintuple Plus is based on horse racing results.</p>" +
                        "<p><strong>How to play:</strong> Predict the winners of 5 horse races.</p>" +
                        "<p><strong>Draws:</strong> Thursday and Sunday.</p>" +
                        "<p><strong>Special feature:</strong> Based on real horse racing results</p>"
        },
        "nacional": {
            title: "Lotería Nacional Information",
            content: "<p>Lotería Nacional is Spain\"s traditional lottery with pre-printed tickets.</p>" +
                        "<p><strong>How to play:</strong> Buy pre-printed tickets with 5-digit numbers.</p>" +
                        "<p><strong>Draws:</strong> Thursday and Saturday, plus special draws.</p>" +
                        "<p><strong>Special draws:</strong> Christmas (El Gordo) and Three Kings Day (El Niño)</p>"
        },
        "quiniela": {
            title: "La Quiniela Information",
            content: "<p>La Quiniela is a football pools game predicting match results.</p>" +
                        "<p><strong>How to play:</strong> Predict the outcome of 15 football matches (1, X, or 2).</p>" +
                        "<p><strong>Draws:</strong> Based on weekend football matches.</p>" +
                        "<p><strong>Categories:</strong> 15, 14, 13, 12, 11, and 10 correct predictions</p>"
        },
        "quinigol": {
            title: "Quinigol Information",
            content: "<p>Quinigol requires predicting exact scores of football matches.</p>" +
                        "<p><strong>How to play:</strong> Predict the exact score of 6 football matches.</p>" +
                        "<p><strong>Draws:</strong> Based on weekend football matches.</p>" +
                        "<p><strong>Difficulty:</strong> Higher difficulty but better prizes than Quiniela</p>"
            }
        };
        
        return gameData[gameType] || {
            title: "Game Information",
            content: "<p>Information not available for this game.</p>"
        };
    }

/**
 * Refresh lottery results via AJAX
 */
function refreshLotteryResults() {
    if (typeof lottery_ajax === "undefined") return;
    
    jQuery.ajax({
        url: lottery_ajax.ajax_url,
        type: "POST",
        data: {
            action: "refresh_lottery_results",
            nonce: lottery_ajax.nonce
        },
        success: function(response) {
            if (response.success) {
                // Update the results display
                jQuery(".lottery-results-grid").html(response.data.html);
                animateNumbers();
            }
        },
        error: function() {
            console.log("Failed to refresh lottery results");
        }
    });
}

/**
 * Animate numbers on page load
 */
function animateNumbers() {
    jQuery(".lottery-number").each(function(index) {
        var $this = jQuery(this);
        $this.css("opacity", "0");
        $this.css("transform", "scale(0.5)");
        
        setTimeout(function() {
            $this.animate({
                opacity: 1
            }, 300);
            $this.css("transform", "scale(1)");
        }, index * 100);
    });
    
    // Animate prize numbers
    jQuery(".nacional-prize-number, .lottery-game-prize").each(function() {
        var $this = jQuery(this);
        var finalValue = jQuery(this).text().replace(/[^\\d]/g, "");
        if (finalValue) {
            $this.text("0");
            jQuery({value: 0}).animate({value: parseInt(finalValue)}, {
                duration: 1000,
                step: function() {
                    $this.text(Math.floor(this.value).toLocaleString());
                },
                complete: function() {
                    $this.text($this.text().replace(/\\d+/, parseInt(finalValue).toLocaleString()));
                }
            });
        }
    });
}

/**
 * Handle responsive tables
 */
function handleResponsiveTables() {
    jQuery(".quiniela-table").each(function() {
        var $table = jQuery(this);
        var $wrapper = jQuery("<div class=\"table-responsive\"></div>");
        $table.wrap($wrapper);
    });
}

/**
 * Dark Mode Toggle Functionality
 */
function toggleDarkMode() {
    const body = document.body;
    const isDarkMode = body.classList.toggle('dark-mode');
    
    // Save preference to localStorage
    localStorage.setItem('lottery_dark_mode', isDarkMode ? 'enabled' : 'disabled');
    
    // Update toggle button text/icon if it exists
    const toggleBtn = document.getElementById('dark-mode-toggle');
    if (toggleBtn) {
        toggleBtn.innerHTML = isDarkMode ? '☀️ Light Mode' : '🌙 Dark Mode';
    }
}

/**
 * Initialize Dark Mode based on saved preference
 */
function initDarkMode() {
    const savedMode = localStorage.getItem('lottery_dark_mode');
    if (savedMode === 'enabled') {
        document.body.classList.add('dark-mode');
        const toggleBtn = document.getElementById('dark-mode-toggle');
        if (toggleBtn) {
            toggleBtn.innerHTML = '☀️ Light Mode';
        }
    }
}

/**
 * Check My Numbers Functionality
 */
function initCheckNumbersModal() {
    const modal = document.getElementById('check-numbers-modal');
    const btn = document.querySelector('.check-numbers-btn');
    const closeBtn = document.querySelector('.lottery-modal-close');
    const gameSelect = document.getElementById('lottery-game');
    
    if (!modal || !btn || !gameSelect) return;
    
    // Open modal
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        modal.style.display = 'block';
        populateNumberInputs(gameSelect.value);
        populateDrawDates(gameSelect.value);
    });
    
    // Close modal
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    
    // Close when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
    
    // Change game
    gameSelect.addEventListener('change', function() {
        populateNumberInputs(this.value);
        populateDrawDates(this.value);
    });
    
    // Submit check
    document.getElementById('check-numbers-submit').addEventListener('click', checkNumbers);
}

/**
 * Populate number input fields based on selected game
 */
function populateNumberInputs(gameType) {
    const mainNumbersContainer = document.getElementById('main-numbers');
    const specialNumbersContainer = document.getElementById('special-numbers');
    
    if (!mainNumbersContainer || !specialNumbersContainer) return;
    
    // Clear previous inputs
    mainNumbersContainer.innerHTML = '';
    specialNumbersContainer.innerHTML = '';
    
    // Game configurations
    const gameConfig = {
        'euromillions': {
            main: { count: 5, min: 1, max: 50, label: 'Main Numbers' },
            special: { count: 2, min: 1, max: 12, label: 'Lucky Stars' }
        },
        'primitiva': {
            main: { count: 6, min: 1, max: 49, label: 'Main Numbers' },
            special: { count: 1, min: 0, max: 9, label: 'Reintegro' }
        },
        'bonoloto': {
            main: { count: 6, min: 1, max: 49, label: 'Main Numbers' },
            special: { count: 1, min: 0, max: 9, label: 'Reintegro' }
        },
        'elgordo': {
            main: { count: 5, min: 1, max: 54, label: 'Main Numbers' },
            special: { count: 1, min: 0, max: 9, label: 'Key Number' }
        }
    };
    
    const config = gameConfig[gameType] || gameConfig['euromillions'];
    
    // Add label for main numbers
    const mainLabel = document.createElement('div');
    mainLabel.className = 'number-inputs-label';
    mainLabel.textContent = config.main.label;
    mainNumbersContainer.appendChild(mainLabel);
    
    // Create main number inputs
    for (let i = 0; i < config.main.count; i++) {
        const input = document.createElement('input');
        input.type = 'number';
        input.min = config.main.min;
        input.max = config.main.max;
        input.className = 'main-number-input';
        input.placeholder = `#${i+1}`;
        input.dataset.index = i;
        mainNumbersContainer.appendChild(input);
    }
    
    // Add label for special numbers
    const specialLabel = document.createElement('div');
    specialLabel.className = 'number-inputs-label';
    specialLabel.textContent = config.special.label;
    specialNumbersContainer.appendChild(specialLabel);
    
    // Create special number inputs
    for (let i = 0; i < config.special.count; i++) {
        const input = document.createElement('input');
        input.type = 'number';
        input.min = config.special.min;
        input.max = config.special.max;
        input.className = 'special-number-input';
        input.placeholder = `#${i+1}`;
        input.dataset.index = i;
        specialNumbersContainer.appendChild(input);
    }
}

/**
 * Populate draw dates dropdown
 */
function populateDrawDates(gameType) {
    const dateSelect = document.getElementById('lottery-draw-date');
    if (!dateSelect) return;
    
    // Clear previous options
    dateSelect.innerHTML = '';
    
    // In a real implementation, this would fetch dates from the server
    // For demo purposes, we'll add some sample dates
    const today = new Date();
    
    for (let i = 0; i < 10; i++) {
        const date = new Date(today);
        date.setDate(date.getDate() - (i * 3)); // Every 3 days back
        
        const option = document.createElement('option');
        option.value = date.toISOString().split('T')[0];
        option.textContent = date.toLocaleDateString('en-GB', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
        dateSelect.appendChild(option);
    }
}

/**
 * Check numbers against draw results
 */
function checkNumbers() {
    const gameType = document.getElementById('lottery-game').value;
    const drawDate = document.getElementById('lottery-draw-date').value;
    const resultsContainer = document.getElementById('check-results');
    
    if (!resultsContainer) return;
    
    // Get user numbers
    const mainNumbers = [];
    document.querySelectorAll('.main-number-input').forEach(input => {
        if (input.value) mainNumbers.push(parseInt(input.value));
    });
    
    const specialNumbers = [];
    document.querySelectorAll('.special-number-input').forEach(input => {
        if (input.value) specialNumbers.push(parseInt(input.value));
    });
    
    // Validate inputs
    if (mainNumbers.length === 0) {
        resultsContainer.innerHTML = '<div class="error-message">Please enter at least one main number</div>';
        return;
    }
    
    // In a real implementation, this would check against actual draw results from the database
    // For demo purposes, we'll simulate a check with random results
    
    // Simulate winning numbers (in a real implementation, these would come from the database)
    const winningMainNumbers = [5, 17, 23, 32, 46];
    const winningSpecialNumbers = [7, 9];
    
    // Check matches
    const mainMatches = mainNumbers.filter(num => winningMainNumbers.includes(num));
    const specialMatches = specialNumbers.filter(num => winningSpecialNumbers.includes(num));
    
    // Determine prize tier (simplified)
    let prizeTier = 'No Prize';
    let prizeAmount = '€0';
    
    if (gameType === 'euromillions') {
        if (mainMatches.length === 5 && specialMatches.length === 2) {
            prizeTier = 'Jackpot';
            prizeAmount = '€130,000,000';
        } else if (mainMatches.length === 5 && specialMatches.length === 1) {
            prizeTier = 'Second Prize';
            prizeAmount = '€307,845';
        } else if (mainMatches.length === 5) {
            prizeTier = 'Third Prize';
            prizeAmount = '€43,775';
        } else if (mainMatches.length === 4 && specialMatches.length === 2) {
            prizeTier = 'Fourth Prize';
            prizeAmount = '€2,292';
        } else if (mainMatches.length >= 2 || specialMatches.length >= 1) {
            prizeTier = 'Minor Prize';
            prizeAmount = '€4 - €162';
        }
    }
    
    // Display results
    resultsContainer.innerHTML = `
        <div class="check-results-header">
            <h3>Results for ${new Date(drawDate).toLocaleDateString('en-GB', {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'})}</h3>
        </div>
        <div class="check-results-numbers">
            <div class="winning-numbers">
                <h4>Winning Numbers:</h4>
                <div class="number-display">
                    ${winningMainNumbers.map(num => `<span class="lottery-number main-number">${num}</span>`).join('')}
                    ${winningSpecialNumbers.map(num => `<span class="lottery-number special-number">${num}</span>`).join('')}
                </div>
            </div>
            <div class="your-numbers">
                <h4>Your Numbers:</h4>
                <div class="number-display">
                    ${mainNumbers.map(num => `<span class="lottery-number main-number ${winningMainNumbers.includes(num) ? 'match' : ''}">${num}</span>`).join('')}
                    ${specialNumbers.map(num => `<span class="lottery-number special-number ${winningSpecialNumbers.includes(num) ? 'match' : ''}">${num}</span>`).join('')}
                </div>
            </div>
        </div>
        <div class="check-results-matches">
            <p>You matched <strong>${mainMatches.length}</strong> main numbers and <strong>${specialMatches.length}</strong> special numbers.</p>
            <div class="prize-info">
                <span class="prize-tier">${prizeTier}</span>
                <span class="prize-amount">${prizeAmount}</span>
            </div>
        </div>
    `;
}

jQuery(document).ready(function($) {
    // Add dark mode toggle to header
    const headerControls = document.querySelector('.hero-controls');
    if (headerControls) {
        const darkModeToggle = document.createElement('button');
        darkModeToggle.id = 'dark-mode-toggle';
        darkModeToggle.className = 'dark-mode-toggle';
        darkModeToggle.innerHTML = '🌙 Dark Mode';
        darkModeToggle.addEventListener('click', toggleDarkMode);
        headerControls.appendChild(darkModeToggle);
    }
    
    // Initialize dark mode
    initDarkMode();
    
    // Initialize check numbers modal
    initCheckNumbersModal();
    
    // Smooth hover effects for lottery cards
    $(".lottery-result-card").hover(
        function() {
            $(this).addClass("hovered");
        },
        function() {
            $(this).removeClass("hovered");
        }
    );
    
    // Info button functionality
    $(".info-button").on("click", function(e) {
        e.preventDefault();
        var card = $(this).closest(".lottery-result-card");
        var gameType = card.attr("class").split(" ")[1];
        
        // Show more info modal or expand card
        showGameInfo(gameType);
    });
    
    // Other results link functionality
    $(".other-results-link").on("click", function(e) {
        e.preventDefault();
        var card = $(this).closest(".lottery-result-card");
        var gameType = card.attr("class").split(" ")[1];
        
        // Navigate to detailed results page
        window.location.href = "/lottery-results/" + gameType + "/";
    });
    
    // Auto-refresh results every 5 minutes
    if (typeof lottery_ajax !== "undefined") {
        setInterval(function() {
            refreshLotteryResults();
        }, 300000); // 5 minutes
    }
    
    // Mobile menu toggle for lottery games banner
    $(".lottery-games-toggle").on("click", function() {
        $(".lottery-games-grid").slideToggle();
    });
    
    // Number animation on page load
    animateNumbers();
    
    // Responsive table handling
    handleResponsiveTables();
});

