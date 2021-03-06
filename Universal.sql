USE [master]
GO
/****** Object:  Database [UNIVERSAL]    Script Date: 15/08/2020 14:40:55 ******/
CREATE DATABASE [UNIVERSAL]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'UNIVERSAL', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\UNIVERSAL.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'UNIVERSAL_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\UNIVERSAL_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [UNIVERSAL] SET COMPATIBILITY_LEVEL = 140
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [UNIVERSAL].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [UNIVERSAL] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [UNIVERSAL] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [UNIVERSAL] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [UNIVERSAL] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [UNIVERSAL] SET ARITHABORT OFF 
GO
ALTER DATABASE [UNIVERSAL] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [UNIVERSAL] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [UNIVERSAL] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [UNIVERSAL] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [UNIVERSAL] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [UNIVERSAL] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [UNIVERSAL] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [UNIVERSAL] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [UNIVERSAL] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [UNIVERSAL] SET  DISABLE_BROKER 
GO
ALTER DATABASE [UNIVERSAL] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [UNIVERSAL] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [UNIVERSAL] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [UNIVERSAL] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [UNIVERSAL] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [UNIVERSAL] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [UNIVERSAL] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [UNIVERSAL] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [UNIVERSAL] SET  MULTI_USER 
GO
ALTER DATABASE [UNIVERSAL] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [UNIVERSAL] SET DB_CHAINING OFF 
GO
ALTER DATABASE [UNIVERSAL] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [UNIVERSAL] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [UNIVERSAL] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [UNIVERSAL] SET QUERY_STORE = OFF
GO
USE [UNIVERSAL]
GO
/****** Object:  Table [dbo].[Ambiente]    Script Date: 15/08/2020 14:40:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Ambiente](
	[ID_Ambiente] [int] IDENTITY(1,1) NOT NULL,
	[DescripcionAmbiente] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_Ambiente] PRIMARY KEY CLUSTERED 
(
	[ID_Ambiente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoAmbiente]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoAmbiente](
	[ID_CasoAmbiente] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Ambiente] [int] NOT NULL,
 CONSTRAINT [PK_CasoAmbiente] PRIMARY KEY CLUSTERED 
(
	[ID_CasoAmbiente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoCiclo]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoCiclo](
	[ID_CasoCiclo] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Ciclo] [int] NOT NULL,
	[FechaRegistro] [datetime] NOT NULL,
	[FechaCierre] [datetime] NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_CasoCiclo] PRIMARY KEY CLUSTERED 
(
	[ID_CasoCiclo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoModulo]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoModulo](
	[ID_CasoModulo] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_ClienteModulo] [int] NOT NULL,
	[ID_ClienteSubModulo1] [int] NULL,
	[ID_ClienteSubModulo2] [int] NULL,
	[ID_Menu] [int] NULL,
	[DescripcionMenu] [nvarchar](50) NULL,
 CONSTRAINT [PK_CasoModulo] PRIMARY KEY CLUSTERED 
(
	[ID_CasoModulo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoPrioridad]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoPrioridad](
	[ID_CasoPrioridad] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Prioridad] [int] NOT NULL,
	[FechaRegistro] [datetime] NOT NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_CasoPrioridad] PRIMARY KEY CLUSTERED 
(
	[ID_CasoPrioridad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoRequerimiento]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoRequerimiento](
	[ID_CasoReferencia] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Referencia] [int] NOT NULL,
 CONSTRAINT [PK_CasoRequerimiento] PRIMARY KEY CLUSTERED 
(
	[ID_CasoReferencia] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoResponsable]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoResponsable](
	[ID_CasoResponsable] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Responsable] [int] NOT NULL,
	[FechaAsignacion] [datetime] NOT NULL,
	[FechaCierre] [datetime] NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_CasoResponsable] PRIMARY KEY CLUSTERED 
(
	[ID_CasoResponsable] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoSeveridad]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoSeveridad](
	[ID_CasoSeveridad] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Severidad] [int] NOT NULL,
 CONSTRAINT [PK_CasoSeveridad] PRIMARY KEY CLUSTERED 
(
	[ID_CasoSeveridad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoUniversal]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoUniversal](
	[ID_CasoUniversal] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_SubCliente] [int] NULL,
	[Serial_Caso] [nvarchar](3) NOT NULL,
	[Numero_Caso] [nvarchar](8) NOT NULL,
	[Descripcion_Caso] [nvarchar](max) NOT NULL,
	[FechaHora_Creacion] [datetime] NOT NULL,
	[Fecha_Creacion] [date] NOT NULL,
	[Hora_Creacion] [time](7) NOT NULL,
	[ReferenciaCliente_Caso] [nvarchar](10) NULL,
	[Suspende_Servicio] [bit] NOT NULL,
	[Activo] [bit] NOT NULL,
	[FechaHora_Cerrado] [datetime] NULL,
	[Fecha_Cierre] [date] NULL,
	[Hora_Cierre] [time](7) NULL,
	[Observaciones_Caso] [nvarchar](max) NULL,
	[ID_Usuario] [int] NULL,
 CONSTRAINT [PK_CasoUniversal] PRIMARY KEY CLUSTERED 
(
	[ID_CasoUniversal] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CasoUSHP]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CasoUSHP](
	[ID_CasoUSHP] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[NumeroUSHP] [nchar](6) NOT NULL,
	[FechaCreacion] [datetime] NOT NULL,
	[FechaCierre] [datetime] NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_CasoUSHP] PRIMARY KEY CLUSTERED 
(
	[ID_CasoUSHP] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Ciclo]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Ciclo](
	[ID_Ciclo] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](20) NOT NULL,
 CONSTRAINT [PK_Ciclo] PRIMARY KEY CLUSTERED 
(
	[ID_Ciclo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Cinta]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Cinta](
	[ID_Cinta] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](50) NOT NULL,
	[Serial] [varbinary](300) NOT NULL,
	[FechaHabilitada] [datetime] NOT NULL,
	[FechaExtraccion] [datetime] NULL,
	[Activa] [float] NOT NULL,
 CONSTRAINT [PK_CINTA] PRIMARY KEY CLUSTERED 
(
	[ID_Cinta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Cli_Agencia]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Cli_Agencia](
	[ID_Agencia] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[Descripcion_Agencia] [nvarchar](20) NOT NULL,
 CONSTRAINT [PK_Cli_Agencia] PRIMARY KEY CLUSTERED 
(
	[ID_Agencia] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Cli_Usuario]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Cli_Usuario](
	[ID_Usuario] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_Agencia] [int] NULL,
	[PrimerNombre_Usuario] [nvarchar](20) NOT NULL,
	[SegundoNombre_Usuario] [nvarchar](20) NULL,
	[PrimerApellido_Usuario] [nvarchar](20) NOT NULL,
	[SegundoApellido_Usuario] [nvarchar](20) NULL,
	[Usuario] [nvarchar](10) NOT NULL,
	[Cargo_Usuario] [nvarchar](20) NULL,
 CONSTRAINT [PK_Cli_Usuario] PRIMARY KEY CLUSTERED 
(
	[ID_Usuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Cliente]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Cliente](
	[ID_Cliente] [int] IDENTITY(1,1) NOT NULL,
	[Nombre_Cliente] [nvarchar](50) NOT NULL,
	[RUC] [nvarchar](20) NULL,
	[Serial] [nvarchar](3) NOT NULL,
	[MultiEmpresa] [float] NOT NULL,
	[SubCliente] [float] NOT NULL,
	[ID_ClientePadre] [int] NULL,
 CONSTRAINT [PK_Cliente] PRIMARY KEY CLUSTERED 
(
	[ID_Cliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ClienteAmbiente]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ClienteAmbiente](
	[ID_ClienteAmbiente] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_Ambiente] [int] NOT NULL,
 CONSTRAINT [PK_ClienteAmbiente] PRIMARY KEY CLUSTERED 
(
	[ID_ClienteAmbiente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ClienteAmbienteLibreria]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ClienteAmbienteLibreria](
	[ID_ClienteAmbienteLibreria] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_Ambiente] [int] NOT NULL,
	[DescripcionLibreria] [nvarchar](20) NOT NULL,
 CONSTRAINT [PK_ClienteAmbienteLibreria] PRIMARY KEY CLUSTERED 
(
	[ID_ClienteAmbienteLibreria] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ClienteModulo]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ClienteModulo](
	[ID_ClienteModulo] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_Modulo] [int] NOT NULL,
 CONSTRAINT [PK_ClienteModulo] PRIMARY KEY CLUSTERED 
(
	[ID_ClienteModulo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ClienteSubModulo1]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ClienteSubModulo1](
	[ID_ClienteSubModulo1] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_SubModulo1] [int] NOT NULL,
 CONSTRAINT [PK_ClienteSubModulo1] PRIMARY KEY CLUSTERED 
(
	[ID_ClienteSubModulo1] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ClienteSubModulo2]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ClienteSubModulo2](
	[ID_ClienteSubModulo2] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[ID_SubModulo2] [int] NOT NULL,
 CONSTRAINT [PK_ClienteSubModulo2] PRIMARY KEY CLUSTERED 
(
	[ID_ClienteSubModulo2] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FechaProyectada]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FechaProyectada](
	[ID_FechaProyectada] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[FechaProyectada] [date] NOT NULL,
	[FechaRegistro] [datetime] NOT NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_FechaProyectada] PRIMARY KEY CLUSTERED 
(
	[ID_FechaProyectada] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Menu]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Menu](
	[ID_Menu] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_Menu] PRIMARY KEY CLUSTERED 
(
	[ID_Menu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Modulo]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Modulo](
	[ID_Modulo] [int] IDENTITY(1,1) NOT NULL,
	[Modulo] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_Modulo] PRIMARY KEY CLUSTERED 
(
	[ID_Modulo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Prioridad]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Prioridad](
	[ID_Prioridad] [int] IDENTITY(1,1) NOT NULL,
	[Prioridad] [int] NOT NULL,
 CONSTRAINT [PK_Prioridad] PRIMARY KEY CLUSTERED 
(
	[ID_Prioridad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Referencia]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Referencia](
	[ID_Referencia] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_Requerimiento] PRIMARY KEY CLUSTERED 
(
	[ID_Referencia] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Responsable]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Responsable](
	[ID_Responsable] [int] IDENTITY(1,1) NOT NULL,
	[UsuarioResponsable] [nvarchar](20) NOT NULL,
	[PrimerNombre_Responsable] [nvarchar](20) NOT NULL,
	[SegundoNombre_Responsable] [nvarchar](20) NULL,
	[PrimerApellido_Responsable] [nvarchar](20) NOT NULL,
	[SegundoApellido_Responsable] [nvarchar](20) NULL,
	[Fecha_Creacion] [datetime] NOT NULL,
	[Fecha_Anulacion] [datetime] NULL,
	[Activo] [float] NOT NULL,
	[Contraseña] [varbinary](300) NULL,
 CONSTRAINT [PK_Responsable] PRIMARY KEY CLUSTERED 
(
	[ID_Responsable] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Seguimiento]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Seguimiento](
	[ID_Seguimiento] [int] IDENTITY(1,1) NOT NULL,
	[ID_CasoUniversal] [int] NOT NULL,
	[ID_Responsable] [int] NOT NULL,
	[Observacion] [nvarchar](max) NULL,
	[FechaHora_Seguimiento] [datetime] NOT NULL,
	[Fecha_Seguimiento] [date] NOT NULL,
	[Hora_Seguimiento] [time](7) NOT NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_Seguimiento] PRIMARY KEY CLUSTERED 
(
	[ID_Seguimiento] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SeguimientoAdjunto]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SeguimientoAdjunto](
	[ID_SeguimientoAdjunto] [int] IDENTITY(1,1) NOT NULL,
	[ID_Seguimiento] [int] NOT NULL,
	[Ruta] [nvarchar](max) NOT NULL,
	[Activo] [float] NOT NULL,
 CONSTRAINT [PK_SeguimientoAdjunto] PRIMARY KEY CLUSTERED 
(
	[ID_SeguimientoAdjunto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Severidad]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Severidad](
	[ID_Severidad] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](20) NOT NULL,
 CONSTRAINT [PK_Severidad] PRIMARY KEY CLUSTERED 
(
	[ID_Severidad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubCliente]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubCliente](
	[ID_SubCliente] [int] IDENTITY(1,1) NOT NULL,
	[Nombre_Cliente] [nvarchar](50) NOT NULL,
	[RUC] [nvarchar](20) NULL,
	[Serial] [nvarchar](3) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
 CONSTRAINT [PK_SubCliente] PRIMARY KEY CLUSTERED 
(
	[ID_SubCliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubMenu]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubMenu](
	[ID_SubMenu] [int] IDENTITY(1,1) NOT NULL,
	[ID_Menu] [int] NOT NULL,
	[Descripcion] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_SubMenu] PRIMARY KEY CLUSTERED 
(
	[ID_SubMenu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubModulo1]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubModulo1](
	[ID_SubModulo1] [int] IDENTITY(1,1) NOT NULL,
	[ID_Modulo] [int] NOT NULL,
	[Descripcion] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_SubModulo] PRIMARY KEY CLUSTERED 
(
	[ID_SubModulo1] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubModulo2]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubModulo2](
	[ID_SubModulo2] [int] IDENTITY(1,1) NOT NULL,
	[ID_SubModulo1] [int] NOT NULL,
	[Descripcion] [nvarchar](max) NOT NULL,
 CONSTRAINT [PK_SubModulo2] PRIMARY KEY CLUSTERED 
(
	[ID_SubModulo2] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubReferencia1]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubReferencia1](
	[ID_SubReferencia1] [int] IDENTITY(1,1) NOT NULL,
	[ID_Referencia] [int] NOT NULL,
	[Descripcion] [nvarchar](20) NOT NULL,
 CONSTRAINT [PK_SubRequerimiento] PRIMARY KEY CLUSTERED 
(
	[ID_SubReferencia1] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubReferencia2]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubReferencia2](
	[ID_SubReferencia2] [int] IDENTITY(1,1) NOT NULL,
	[ID_SubReferencia1] [int] NOT NULL,
	[Descripcion] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_SubRequerimiento2] PRIMARY KEY CLUSTERED 
(
	[ID_SubReferencia2] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SubReferencia3]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SubReferencia3](
	[ID_SubReferencia3] [int] NOT NULL,
	[ID_SubReferencia2] [int] NOT NULL,
	[ID_ClienteAmbienteLibreria] [int] NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SuspensionServicio]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SuspensionServicio](
	[ID_SuspensionServicio] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](2) NOT NULL,
 CONSTRAINT [PK_SuspensionServicio] PRIMARY KEY CLUSTERED 
(
	[ID_SuspensionServicio] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SuspensionServicioSeguimiento]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SuspensionServicioSeguimiento](
	[ID_SuspensionServicioSeguimiento] [int] IDENTITY(1,1) NOT NULL,
	[ID_Seguimiento] [int] NOT NULL,
	[ID_SuspensionServicio] [int] NOT NULL,
	[ID_TipoSuspension] [int] NOT NULL,
	[FechaInicioSuspension] [date] NOT NULL,
	[FechaFinSuspension] [date] NOT NULL,
	[HoraInicioSuspension] [time](7) NULL,
	[HoraFinSuspension] [time](7) NULL,
	[FechaHoraInicioSuspension] [datetime] NOT NULL,
	[FechaHoraFinSuspension] [datetime] NULL,
 CONSTRAINT [PK_SuspensionServicioSeguimiento] PRIMARY KEY CLUSTERED 
(
	[ID_SuspensionServicioSeguimiento] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[TipoSuspension]    Script Date: 15/08/2020 14:40:56 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[TipoSuspension](
	[ID_TipoSuspension] [int] IDENTITY(1,1) NOT NULL,
	[Descripcion] [nvarchar](10) NOT NULL,
 CONSTRAINT [PK_TipoSuspension] PRIMARY KEY CLUSTERED 
(
	[ID_TipoSuspension] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
USE [master]
GO
ALTER DATABASE [UNIVERSAL] SET  READ_WRITE 
GO
