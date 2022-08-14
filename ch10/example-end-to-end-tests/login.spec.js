describe('Application Login', function () {
    it('successfully logs in', function () {
        cy.visit('http://localhost:8000/login')

        cy.get('#username')
            .type('test@test.com')

        cy.get('#password')
            .type('supersecret')

        cy.get('#submit')
            .click()

        cy.url()
            .should('contain', 'http://localhost:8000/home')
    })
})