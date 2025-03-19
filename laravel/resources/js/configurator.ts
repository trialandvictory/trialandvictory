interface Product {
    id: string;
    name: string;
    price: number;
    description: string;
    icon: string;
}

interface Section {
    id: string;
    type: string;
    title: string;
    products: Product[];
}

interface ProductData {
    sections: Section[];
}

const product_data: ProductData = {
    "sections": [
        {
            "id": "weboplossingen",
            "type": "multiple-choice",
            "title": "Weboplossingen",
            "products": [
                {
                    "id": "maatwerk-weboplossingen",
                    "name": "Maatwerk Weboplossingen",
                    "price": 500,
                    "description": "Op maat gemaakte websites of webapplicaties die passen bij de behoeften van jouw bedrijf.",
                    "icon": "🌐"
                },
                {
                    "id": "datadashboards",
                    "name": "Datadashboards",
                    "price": 300,
                    "description": "Op maat gemaakte datadashboards om je KPI's te visualiseren en datagestuurde beslissingen te nemen.",
                    "icon": "📊"
                },
                {
                    "id": "wordpress-websites",
                    "name": "WordPress Websites",
                    "price": 400,
                    "description": "Bouw snelle, veilige en makkelijk te onderhouden WordPress-websites met volledige maatwerkopties.",
                    "icon": "🖥️"
                },
                {
                    "id": "maatwerk-webapplicaties",
                    "name": "Maatwerk Webapplicaties",
                    "price": 600,
                    "description": "Ontwikkel webapplicaties met op maat gemaakte functionaliteiten die passen bij jouw bedrijfsprocessen.",
                    "icon": "💻"
                }
            ]
        },
        {
            "id": "hosting-en-onderhoud",
            "type": "multiple-choice",
            "title": "Hosting & Onderhoud",
            "products": [
                {
                    "id": "hosting-diensten",
                    "name": "Hosting Services",
                    "price": 150,
                    "description": "Betrouwbare en snelle hostingoplossingen voor maximale uptime en beveiliging.",
                    "icon": "🔒"
                },
                {
                    "id": "onderhoud-diensten",
                    "name": "Onderhoudsdiensten",
                    "price": 200,
                    "description": "Regelmatige updates, performance optimalisatie en back-ups om je website in topvorm te houden.",
                    "icon": "🔧"
                },
                {
                    "id": "wordpress-updates",
                    "name": "WordPress Updates",
                    "price": 100,
                    "description": "Regelmatige updates van WordPress en plugins voor optimale prestaties en veiligheid.",
                    "icon": "🔄"
                },
                {
                    "id": "back-up-diensten",
                    "name": "Back-up Diensten",
                    "price": 50,
                    "description": "Routineback-ups om ervoor te zorgen dat je gegevens altijd veilig zijn.",
                    "icon": "💾"
                }
            ]
        },
        {
            "id": "overige-diensten",
            "type": "single-choice",
            "title": "Overige Diensten",
            "products": [
                {
                    "id": "seo-optimalisatie",
                    "name": "SEO Optimalisatie",
                    "price": 250,
                    "description": "Verbeter de zoekmachineoptimalisatie van je website om beter gevonden te worden.",
                    "icon": "🔍"
                },
                {
                    "id": "gebruikerservaring-optimalisatie",
                    "name": "UX Optimalisatie",
                    "price": 300,
                    "description": "Verhoog de gebruiksvriendelijkheid van je website voor een betere gebruikerservaring.",
                    "icon": "🧑‍💻"
                }
            ]
        }
    ]
};

let total_price = 0;
let selected_products: Product[] = [];

/**
 * Renders a section based on section data and index
 */
function render_section(section: Section, index: number): HTMLElement {
    // Create the section container
    const $section_div = document.createElement('div');
    $section_div.classList.add('section');
    $section_div.id = section.id;

    // Only show first section initially
    if (index > 0) {
        $section_div.style.display = 'none';
    }

    // Create section title
    const $section_title = document.createElement('div');
    $section_title.classList.add('section-title');
    $section_title.textContent = section.title;
    $section_div.appendChild($section_title);

    // Create products container
    const $products_container = document.createElement('div');
    $products_container.classList.add('products-container');

    // Create products
    section.products.forEach(product => {
        // Create product container
        const $product_div = document.createElement('div');
        $product_div.classList.add('product');

        // Create product card
        const $product_card = document.createElement('div');
        $product_card.classList.add('product-card');

        // Create product image/icon
        const $product_image = document.createElement('div');
        $product_image.classList.add('product-image');
        $product_image.textContent = product.icon;
        $product_card.appendChild($product_image);

        // Create product name
        const $product_name = document.createElement('div');
        $product_name.classList.add('product-name');
        $product_name.textContent = product.name;
        $product_card.appendChild($product_name);

        // Create product description
        const $product_description = document.createElement('div');
        $product_description.classList.add('product-description');
        $product_description.textContent = product.description;
        $product_card.appendChild($product_description);

        // Create product price
        const $product_price = document.createElement('div');
        $product_price.classList.add('product-price');
        $product_price.textContent = `€${product.price}`;
        $product_card.appendChild($product_price);

        // Create input for selection
        const $input = document.createElement('input');
        $input.type = section.type === 'multiple-choice' ? 'checkbox' : 'radio';
        $input.value = product.price.toString();
        $input.id = `product-${product.id}`;
        $input.name = `section-${section.id}`;
        $input.classList.add('product-select');

        // Create label for the input
        const $label = document.createElement('label');
        $label.htmlFor = `product-${product.id}`;
        $label.textContent = "Selecteer";
        $label.classList.add('product-select-label');

        // Add event listener to input
        $input.addEventListener('change', () => {
            if (section.type === 'multiple-choice') {
                if ($input.checked) {
                    total_price += product.price;
                    selected_products.push(product);
                    $product_card.classList.add('selected');
                } else {
                    total_price -= product.price;
                    selected_products = selected_products.filter(p => p.id !== product.id);
                    $product_card.classList.remove('selected');
                }
            } else {
                // single choice
                const $previous_selected = document.querySelector(`input[name='section-${section.id}']:checked`) as HTMLInputElement;
                if ($previous_selected && $previous_selected !== $input) {
                    total_price -= parseFloat($previous_selected.value);
                    const previous_product_id = $previous_selected.id.replace('product-', '');
                    const $previous_card = document.querySelector(`.product-card[data-product-id="${previous_product_id}"]`);
                    if ($previous_card) {
                        $previous_card.classList.remove('selected');
                    }
                }
                total_price += product.price;
                selected_products = selected_products.filter(p => !section.products.some(sp => sp.id === p.id));
                selected_products.push(product);
                $product_card.classList.add('selected');
            }
            update_total_price();
            reveal_next_section(index);
        });

        // Add data attribute to link card with product
        $product_card.setAttribute('data-product-id', product.id);

        // Add click handler to the card to trigger input change
        $product_card.addEventListener('click', () => {
            if ($input.type === 'checkbox') {
                $input.checked = !$input.checked;
            } else {
                $input.checked = true;
            }

            // Manually trigger change event
            const event = new Event('change');
            $input.dispatchEvent(event);
        });

        // Add selection elements
        const $selection_container = document.createElement('div');
        $selection_container.classList.add('selection-container');
        $selection_container.appendChild($input);
        $selection_container.appendChild($label);
        $product_card.appendChild($selection_container);

        // Add card to product div
        $product_div.appendChild($product_card);
        $products_container.appendChild($product_div);
    });

    $section_div.appendChild($products_container);
    return $section_div;
}

/**
 * Updates the total price display and summary
 */
function update_total_price(): void {
    const $total_price = document.getElementById('total-price');
    const $summary = document.getElementById('summary');

    if ($total_price && $summary) {
        $total_price.textContent = `Totaal vanaf: €${total_price.toFixed(2)}`;
        $summary.innerHTML = `<h3>Gekozen Producten</h3>` +
            selected_products.map(p => `${p.icon} ${p.name}: €${p.price}`).join('<br>');
    }
}

/**
 * Reveals the next section after a selection is made
 */
function reveal_next_section(index: number): void {
    if (index + 1 < product_data.sections.length) {
        const next_section = document.getElementById(product_data.sections[index + 1].id);
        if (next_section) {
            next_section.style.display = 'block';
        }
    }
}

/**
 * Renders all product data and initializes the configurator
 */
function render_product_data(): void {
    const $configurator_container = document.getElementById('configurator-container');

    if (!$configurator_container) {
        console.error('Configurator container not found');
        return;
    }

    // Render all sections
    product_data.sections.forEach((section, index) => {
        const $rendered_section = render_section(section, index);
        $configurator_container.appendChild($rendered_section);
    });

    // Create the summary section
    const $summary_container = document.createElement('div');
    $summary_container.classList.add('summary');

    const $total_price_div = document.createElement('div');
    $total_price_div.classList.add('total-price');
    $total_price_div.id = 'total-price';
    $total_price_div.textContent = 'Totaal vanaf: €0.00';

    const $summary_div = document.createElement('div');
    $summary_div.id = 'summary';

    $summary_container.appendChild($total_price_div);
    $summary_container.appendChild($summary_div);

    $configurator_container.appendChild($summary_container);

}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', render_product_data);
