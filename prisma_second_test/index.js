const { PrismaClient } = require('@prisma/client')

const prisma = new PrismaClient()

const my_function = async() => {

    try {
        const newdata = await prisma.User.create({
            data: {
                name: "Bond Bond",
                email: "bond@bond.com"
            }
        })
        console.log("New data created", newdata)
    } catch (error) {
        console.error("It didn't work", error)
    }
    finally{
        await prisma.$disconnect()
    }
}

my_function();