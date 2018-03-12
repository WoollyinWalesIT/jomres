
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
c
u
s
t
o
m
_
t
e
x
t

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
n
g
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
g
l
o
b
a
l
 
c
u
s
t
o
m
 
t
e
x
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
a
r
r
a
y
(
0
)
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
_
c
u
r
r
e
n
t
_
l
a
n
g
(
$
l
a
n
g
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
l
a
n
g
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
n
g
 
=
 
$
l
a
n
g
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
g
l
o
b
a
l
 
c
u
s
t
o
m
 
t
e
x
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
a
r
r
a
y
(
0
)
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
a
t
h
e
r
_
d
a
t
a
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
f
i
l
t
e
r
 
t
h
e
 
p
r
o
p
e
r
t
i
e
s
 
f
o
r
 
w
h
i
c
h
 
w
e
`
v
e
 
a
l
r
e
a
d
y
 
g
o
t
 
t
h
e
 
c
u
s
t
o
m
 
t
e
x
t
 
i
n
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t

 
 
 
 
 
 
 
 
$
t
m
p
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
a
s
 
$
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
[
$
u
i
d
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
a
r
r
a
y
[
]
 
=
 
$
u
i
d
;

	
	
	
	
/
/
w
e
`
l
l
 
d
e
f
i
n
e
 
t
h
i
s
 
h
e
r
e
,
 
s
o
 
e
v
e
n
 
i
f
 
e
m
p
t
y
,
 
w
e
 
k
n
o
w
 
t
h
a
t
 
w
e
`
v
e
 
g
o
n
e
 
t
h
r
o
u
g
h
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
u
i
d
 
b
e
f
o
r
e

	
	
	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
[
$
u
i
d
]
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
$
t
m
p
_
a
r
r
a
y
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
c
o
n
s
t
a
n
t
`
 
A
S
 
l
a
n
g
u
a
g
e
_
c
o
n
s
t
a
n
t
,
 
`
c
u
s
t
o
m
t
e
x
t
`
,
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
.
"
)
 
A
N
D
 
`
l
a
n
g
u
a
g
e
`
 
=
 
'
"
.
$
t
h
i
s
-
>
l
a
n
g
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
s
t
o
m
T
e
x
t
L
i
s
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
u
s
t
o
m
T
e
x
t
L
i
s
t
 
a
s
 
$
t
e
x
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
C
o
n
s
t
a
n
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
s
c
<
x
>
r
i
p
t
'
,
 
'
s
c
r
i
p
t
'
,
 
$
t
e
x
t
-
>
l
a
n
g
u
a
g
e
_
c
o
n
s
t
a
n
t
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
e
x
t
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
)
 
{
 
/
/
i
t
`
s
 
a
 
g
l
o
b
a
l
 
c
u
s
t
o
m
 
t
e
x
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
[
$
t
e
x
t
-
>
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
]
[
 
$
t
h
e
C
o
n
s
t
a
n
t
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
e
x
t
-
>
c
u
s
t
o
m
t
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
i
t
`
s
 
a
 
p
r
o
p
e
r
t
y
 
s
p
e
c
i
f
i
c
 
c
u
s
t
o
m
 
t
e
x
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
[
 
$
t
e
x
t
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
$
t
h
e
C
o
n
s
t
a
n
t
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
e
x
t
-
>
c
u
s
t
o
m
t
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
L
e
g
a
c
y
 
f
u
n
c
t
i
o
n
:
 
w
e
`
l
l
 
k
e
e
p
 
i
t
 
h
e
r
e
 
b
e
c
a
u
s
e
 
i
t
`
s
 
u
s
e
d
 
i
n
 
v
a
r
i
o
u
s
 
p
l
a
c
e
s

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
c
u
s
t
o
m
_
t
e
x
t
_
f
o
r
_
p
r
o
p
e
r
t
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
)

 
 
 
 
{

	
	
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
)

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	

	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
i
e
s
_
c
u
s
t
o
m
_
t
e
x
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
)
)

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
e
l
s
e

	
	
	
$
t
h
i
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
a
r
r
a
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
)
;

	
	

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

	

	
/
/
u
p
d
a
t
e
 
c
u
s
t
o
m
 
t
e
x
t

	
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
(
$
t
h
e
C
o
n
s
t
a
n
t
,
 
$
t
h
e
V
a
l
u
e
,
 
$
a
u
d
i
t
 
=
 
t
r
u
e
,
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
n
u
l
l
,
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
 
=
 
'
0
'
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
_
u
s
e
r
'
)
;

	
	

	
	
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

	
	
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
$
t
e
s
t
S
t
r
 
=
 
t
r
i
m
(
s
t
r
i
p
_
t
a
g
s
_
e
x
c
e
p
t
(
$
t
h
e
V
a
l
u
e
)
)
;

	
	
$
c
r
s
E
t
c
 
=
 
a
r
r
a
y
(
"
\
t
"
,
 
"
\
n
"
,
 
"
\
r
"
)
;

	
	
$
t
e
s
t
S
t
r
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
c
r
s
E
t
c
,
 
'
'
,
 
$
t
e
s
t
S
t
r
)
;

	
	

	
	
i
f
 
(

	
	
	
s
t
r
l
e
n
(
$
t
e
s
t
S
t
r
)
 
=
=
 
0
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
E
S
C
R
I
P
T
I
O
N
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
C
H
E
C
K
I
N
T
I
M
E
S
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
A
R
E
A
A
C
T
I
V
I
T
I
E
S
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
I
R
E
C
T
I
O
N
S
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
A
I
R
P
O
R
T
S
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
O
T
H
E
R
T
R
A
N
S
P
O
R
T
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
I
S
C
L
A
I
M
E
R
S
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
T
I
T
L
E
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
D
E
S
C
R
I
P
T
I
O
N
'
 
&
&

	
	
	
$
t
h
e
C
o
n
s
t
a
n
t
 
!
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
K
E
Y
W
O
R
D
S
'

	
	
	
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	

	
	
i
f
 
(
!
i
s
s
e
t
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
)
 
{

	
	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
l
l
P
r
o
p
e
r
t
i
e
s
'
 
]
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
 
=
=
 
t
r
u
e
)
 
{

	
	
	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
(
i
n
t
)
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

	
	
	
}

	
	
}


	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
c
u
s
t
o
m
t
e
x
t
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 

	
	
	
	
	
	
W
H
E
R
E
 
`
c
o
n
s
t
a
n
t
`
 
=
 
'
"
.
$
t
h
e
C
o
n
s
t
a
n
t
.
"
'
 

	
	
	
	
	
	
A
N
D
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
 

	
	
	
	
	
	
A
N
D
 
`
l
a
n
g
u
a
g
e
`
 
=
 
'
"
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
.
"
'
 

	
	
	
	
	
	
A
N
D
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
=
 
'
"
.
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
.
"
'
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	

	
	
i
f
 
(
s
t
r
l
e
n
(
$
t
h
e
V
a
l
u
e
)
 
=
=
 
0
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 

	
	
	
	
	
	
	
W
H
E
R
E
 
`
c
o
n
s
t
a
n
t
`
 
=
 
'
"
.
$
t
h
e
C
o
n
s
t
a
n
t
.
"
'
 

	
	
	
	
	
	
	
A
N
D
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
 

	
	
	
	
	
	
	
A
N
D
 
`
l
a
n
g
u
a
g
e
`
 
=
 
'
"
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
.
"
'
 

	
	
	
	
	
	
	
A
N
D
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
=
 
'
"
.
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
.
"
'
"
;

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
	
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 

	
	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
	
`
c
o
n
s
t
a
n
t
`
,

	
	
	
	
	
	
	
	
	
`
c
u
s
t
o
m
t
e
x
t
`
,

	
	
	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
	
	
	
`
l
a
n
g
u
a
g
e
`
,

	
	
	
	
	
	
	
	
	
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`

	
	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
	
V
A
L
U
E
S
 
(

	
	
	
	
	
	
	
	
	
'
"
.
$
t
h
e
C
o
n
s
t
a
n
t
.
"
'
,

	
	
	
	
	
	
	
	
	
'
"
.
$
t
h
e
V
a
l
u
e
.
"
'
,

	
	
	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
,

	
	
	
	
	
	
	
	
	
'
"
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
.
"
'
,
 

	
	
	
	
	
	
	
	
	
'
"
.
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
.
"
'

	
	
	
	
	
	
	
	
	
)
"
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
_
t
e
x
t
 

	
	
	
	
	
	
	
	
S
E
T
 
`
c
u
s
t
o
m
t
e
x
t
`
=
'
"
.
$
t
h
e
V
a
l
u
e
.
"
'
 

	
	
	
	
	
	
	
	
W
H
E
R
E
 
`
c
o
n
s
t
a
n
t
`
 
=
 
'
"
.
$
t
h
e
C
o
n
s
t
a
n
t
.
"
'
 

	
	
	
	
	
	
	
	
A
N
D
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
 

	
	
	
	
	
	
	
	
A
N
D
 
`
l
a
n
g
u
a
g
e
`
 
=
 
'
"
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
.
"
'
 

	
	
	
	
	
	
	
	
A
N
D
 
`
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
`
 
=
 
'
"
.
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
.
"
'
"
;

	
	
	
}

	
	
}


	
	
$
a
u
d
i
t
_
m
s
g
 
=
 
'
'
;

	
	
i
f
 
(
$
a
u
d
i
t
)
 
{

	
	
	
$
a
u
d
i
t
_
m
s
g
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
C
U
S
T
O
M
T
E
X
T
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
C
U
S
T
O
M
T
E
X
T
'
,
 
f
a
l
s
e
)
;

	
	
}


	
	
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
$
a
u
d
i
t
_
m
s
g
)
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
u
s
t
o
m
 
t
e
x
t
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

}

