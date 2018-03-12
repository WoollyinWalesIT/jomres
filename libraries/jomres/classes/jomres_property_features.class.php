
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
 
@
p
a
c
k
a
g
e
 
J
o
m
r
e
s

 
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
.

 
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
 
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s

	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
	
=
 
f
a
l
s
e
;
	
	
	
	
/
/
 
a
r
r
a
y
 
o
f
 
a
l
l
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s


	
	
$
t
h
i
s
-
>
i
d
 
	
	
	
	
	
=
 
0
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d

	
	
$
t
h
i
s
-
>
a
b
b
v
	
	
	
	
	
=
 
'
'
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
n
a
m
e

	
	
$
t
h
i
s
-
>
d
e
s
c
	
	
	
	
	
=
 
'
'
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
d
e
s
c
r
i
p
t
i
o
n

	
	
$
t
h
i
s
-
>
i
m
a
g
e
	
	
	
	
=
 
'
'
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
c
o
n
/
i
m
a
g
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
y
_
u
i
d
	
	
	
=
 
0
;
	
	
	
	
	
/
/
 
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
 
(
n
o
t
 
u
s
e
d
 
f
o
r
 
n
o
w
)

	
	
$
t
h
i
s
-
>
p
t
y
p
e
_
x
r
e
f
	
	
	
=
 
a
r
r
a
y
(
)
;
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
x
r
e
f
 
a
r
r
a
y

	
	
$
t
h
i
s
-
>
c
a
t
_
i
d
	
	
	
	
=
 
0
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
i
d

	
	
$
t
h
i
s
-
>
c
a
t
_
t
i
t
l
e
	
	
	
=
 
0
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
i
d

	
	
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
 
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
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


	
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s

	
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
a
l
l
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
(
)

	
	
{

	
	
i
f
 
(
 
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
y
_
f
e
a
t
u
r
e
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
 
t
r
u
e
;

	
	
	
}

	
	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
=
 
a
r
r
a
y
(
)
;


	
	
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
`
,
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
`
,
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
`
,
 
`
i
m
a
g
e
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
p
t
y
p
e
_
x
r
e
f
`
,
 
`
c
a
t
_
i
d
`
 
,
 
`
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
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
 
=
 
0
 
O
R
D
E
R
 
B
Y
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
`
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

	
	

	
	
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
c
a
t
e
g
o
r
i
e
s

	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
 
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
'
 
)
;

	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
-
>
g
e
t
_
a
l
l
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
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
r
e
s
u
l
t
 
a
s
 
$
r
 
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
i
d
'
]
	
	
	
	
	
=
 
(
i
n
t
)
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
;
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d

	
	
	
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
a
b
b
v
'
]
	
	
	
	
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
F
E
A
T
U
R
E
S
_
A
B
B
V
'
 
.
 
(
i
n
t
)
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
,
 
f
a
l
s
e
 
)
;
 
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
n
a
m
e
/
a
b
b
v
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
d
e
s
c
'
]
	
	
	
	
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
F
E
A
T
U
R
E
S
_
D
E
S
C
'
 
.
 
(
i
n
t
)
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
,
 
f
a
l
s
e
 
)
;
 
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
d
e
s
c
r
i
p
t
i
o
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
i
m
a
g
e
'
]
	
	
	
	
=
 
$
r
-
>
i
m
a
g
e
;
	
	
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
m
a
g
e
/
i
c
o
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
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
'
]
	
	
=
 
(
i
n
t
)
$
r
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
;
	
	
	
	
/
/
 
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
]
	
=
 
(
i
n
t
)
$
r
-
>
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
;
	
	
	
	
/
/
 
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

	
	
	

	
	
	
i
f
 
(
 
$
r
-
>
p
t
y
p
e
_
x
r
e
f
 
!
=
 
'
'
 
)

	
	
	
	
{

	
	
	
	
i
f
 
(
 
!
i
s
_
n
u
m
e
r
i
c
(
$
r
-
>
p
t
y
p
e
_
x
r
e
f
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
p
t
y
p
e
_
x
r
e
f
'
]
	
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
-
>
p
t
y
p
e
_
x
r
e
f
)
;
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
x
r
e
f
 
u
n
s
e
r
i
a
l
i
z
e
d

	
	
	
	
	
}

	
	
	
	
e
l
s
e
 
/
/
b
a
c
k
w
a
r
d
 
c
o
m
p
a
t
i
b
i
l
i
t
y
 
f
o
r
 
w
h
e
n
 
o
n
l
y
 
o
n
e
 
p
t
y
p
e
 
i
d
 
c
o
u
l
d
 
b
e
 
a
s
s
i
g
n
e
d

	
	
	
	
	
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
p
t
y
p
e
_
x
r
e
f
'
]
	
=
 
a
r
r
a
y
(
 
(
i
n
t
)
$
r
-
>
p
t
y
p
e
_
x
r
e
f
 
)
;
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
x
r
e
f

	
	
	
	
	
}

	
	
	
	
}

	
	
	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
p
t
y
p
e
_
x
r
e
f
'
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
c
a
t
_
i
d
'
]
	
	
	
=
 
(
i
n
t
)
$
r
-
>
c
a
t
_
i
d
;
	
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
i
d

	
	
	

	
	
	
i
f
 
(
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
 
(
i
n
t
)
$
r
-
>
c
a
t
_
i
d
,
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
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
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
 
)
 
)

	
	
	
	
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
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
c
a
t
_
t
i
t
l
e
'
]
	
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
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
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
[
(
i
n
t
)
$
r
-
>
c
a
t
_
i
d
]
[
'
t
i
t
l
e
'
]
;
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
t
i
t
l
e

	
	
	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
[
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
]
[
'
c
a
t
_
t
i
t
l
e
'
]
	
=
 
'
'
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

	

	
/
/
g
e
t
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
b
y
 
i
d

	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
(
 
$
i
d
 
=
 
0
 
)

	
	
{

	
	
i
f
 
(
 
(
i
n
t
)
$
i
d
 
=
=
 
0
 
)

	
	
	
{

	
	
	
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

	
	

	
	
i
f
 
(
 
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
y
_
f
e
a
t
u
r
e
s
)
 
&
&
 
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
y
_
f
e
a
t
u
r
e
s
[
(
i
n
t
)
$
i
d
]
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
y
_
f
e
a
t
u
r
e
 
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
;

	
	
	

	
	
	
$
t
h
i
s
-
>
i
d
 
	
	
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
i
d
'
]
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d

	
	
	
$
t
h
i
s
-
>
a
b
b
v
	
	
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
a
b
b
v
'
]
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
n
a
m
e

	
	
	
$
t
h
i
s
-
>
d
e
s
c
	
	
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
d
e
s
c
'
]
;
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
d
e
s
c
r
i
p
t
i
o
n

	
	
	
$
t
h
i
s
-
>
i
m
a
g
e
	
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
i
m
a
g
e
'
]
;
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
c
o
n
/
i
m
a
g
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
y
_
u
i
d
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
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
'
]
;
	
	
	
/
/
 
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

	
	
	
$
t
h
i
s
-
>
p
t
y
p
e
_
x
r
e
f
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
p
t
y
p
e
_
x
r
e
f
'
]
;
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
x
r
e
f
 
a
r
r
a
y

	
	
	
$
t
h
i
s
-
>
c
a
t
_
i
d
	
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
c
a
t
_
i
d
'
]
;
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
i
d

	
	
	
$
t
h
i
s
-
>
c
a
t
_
t
i
t
l
e
	
	
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
c
a
t
_
t
i
t
l
e
'
]
;
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
i
d

	
	
	
$
t
h
i
s
-
>
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
	
=
 
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
y
_
f
e
a
t
u
r
e
s
[
 
(
i
n
t
)
$
i
d
 
]
[
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
]
;
	
/
/
 
a
j
a
x
 
s
e
a
r
c
h
 
f
e
a
t
u
r
e
s
 
f
i
l
t
e
r


	
	
	
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
`
,
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
`
,
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
`
,
 
`
i
m
a
g
e
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
p
t
y
p
e
_
x
r
e
f
`
,
 
`
c
a
t
_
i
d
`
 
,
 
`
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
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
 
=
 
0
 
A
N
D
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
s
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
i
d
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

	
	

	
	
f
o
r
e
a
c
h
 
(
 
$
r
e
s
u
l
t
 
a
s
 
$
r
 
)

	
	
	
{

	
	
	
$
t
h
i
s
-
>
i
d
	
	
	
	
=
 
(
i
n
t
)
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
;
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d

	
	
	
$
t
h
i
s
-
>
a
b
b
v
	
	
	
	
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
F
E
A
T
U
R
E
S
_
A
B
B
V
'
 
.
 
(
i
n
t
)
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
,
 
f
a
l
s
e
 
)
;
 
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
n
a
m
e
/
a
b
b
v
;

	
	
	
$
t
h
i
s
-
>
d
e
s
c
	
	
	
	
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
F
E
A
T
U
R
E
S
_
D
E
S
C
'
 
.
 
(
i
n
t
)
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
$
r
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
,
 
f
a
l
s
e
 
)
;
 
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
d
e
s
c
r
i
p
t
i
o
n

	
	
	
$
t
h
i
s
-
>
i
m
a
g
e
	
	
	
=
 
$
r
-
>
i
m
a
g
e
;
	
	
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
m
a
g
e
/
i
c
o
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
$
r
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
;
	
	
	
	
/
/
 
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

	
	
	
$
t
h
i
s
-
>
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
	
=
 
$
r
-
>
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
;
	
/
/
 
a
j
a
x
 
s
e
a
r
c
h
 
f
e
a
t
u
r
e
s
 
f
i
l
t
e
r

	
	
	

	
	
	
i
f
 
(
 
$
r
-
>
p
t
y
p
e
_
x
r
e
f
 
!
=
 
'
'
 
)

	
	
	
	
{

	
	
	
	
i
f
 
(
 
!
i
s
_
n
u
m
e
r
i
c
(
$
r
-
>
p
t
y
p
e
_
x
r
e
f
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
t
y
p
e
_
x
r
e
f
	
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
-
>
p
t
y
p
e
_
x
r
e
f
)
;
	
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
x
r
e
f
 
u
n
s
e
r
i
a
l
i
z
e
d

	
	
	
	
	
}

	
	
	
	
e
l
s
e
 
/
/
b
a
c
k
w
a
r
d
 
c
o
m
p
a
t
i
b
i
l
i
t
y
 
f
o
r
 
w
h
e
n
 
o
n
l
y
 
o
n
e
 
p
t
y
p
e
 
i
d
 
c
o
u
l
d
 
b
e
 
a
s
s
i
g
n
e
d

	
	
	
	
	
{

	
	
	
	
	
$
t
h
i
s
-
>
p
t
y
p
e
_
x
r
e
f
	
=
 
a
r
r
a
y
(
 
(
i
n
t
)
$
r
-
>
p
t
y
p
e
_
x
r
e
f
 
)
;
	
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
x
r
e
f
 
a
r
r
a
y

	
	
	
	
	
}

	
	
	
	
}

	
	
	
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
p
t
y
p
e
_
x
r
e
f
	
=
 
a
r
r
a
y
(
)
;

	
	
	

	
	
	
$
t
h
i
s
-
>
c
a
t
_
i
d
	
	
	
=
 
(
i
n
t
)
$
r
-
>
c
a
t
_
i
d
;
	
	
	
	
	
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
i
d

	
	
	

	
	
	
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
c
a
t
e
g
o
r
i
e
s

	
	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
 
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
'
 
)
;

	
	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
-
>
g
e
t
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
y
(
 
(
i
n
t
)
$
r
-
>
c
a
t
_
i
d
 
)
;

	
	

	
	
	
$
t
h
i
s
-
>
c
a
t
_
t
i
t
l
e
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
c
a
t
e
g
o
r
i
e
s
-
>
t
i
t
l
e
;
	
/
/
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
c
a
t
e
g
o
r
y
 
t
i
t
l
e

	
	
	
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
c
r
e
a
t
e
 
n
e
w
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e

	
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
_
n
e
w
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
(
)

	
	
{

	
	
i
f
 
(
 
$
t
h
i
s
-
>
i
d
 
>
 
0
 
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d
 
a
l
r
e
a
d
y
 
s
e
t
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
`
r
e
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
?
"
)
;

	
	
	
}

	
	

	
	
i
f
 
(
 
$
t
h
i
s
-
>
a
b
b
v
 
=
=
 
'
'
 
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
a
b
b
v
 
n
o
t
 
s
e
t
.
"
)
;

	
	
	
}

	
	

	
	
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 

	
	
	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
	
	
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
`
,

	
	
	
	
	
	
	
	
	
	
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
`
,

	
	
	
	
	
	
	
	
	
	
 
`
i
m
a
g
e
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
p
t
y
p
e
_
x
r
e
f
`
,

	
	
	
	
	
	
	
	
	
	
 
`
c
a
t
_
i
d
`
,

	
	
	
	
	
	
	
	
	
	
 
`
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
`
,

	
	
	
	
	
	
	
	
	
	
 
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
i
s
-
>
a
b
b
v
 
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
i
s
-
>
d
e
s
c
 
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
i
s
-
>
i
m
a
g
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
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
p
t
y
p
e
_
x
r
e
f
)
 
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
t
h
i
s
-
>
c
a
t
_
i
d
 
.
 
"
,

	
	
	
	
	
	
	
	
	
	
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
 
.
 
"

	
	
	
	
	
	
	
	
	
	
 
)
"
;

	
	

	
	
i
f
 
(
 
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
 
f
a
l
s
e
 
)
 
)

	
	
	
{

	
	
	
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

	
	
e
l
s
e

	
	
	
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
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
"
)
;

	
	
	
}

	
	
}

	

	
/
/
u
p
d
a
t
e
 
e
x
i
s
t
i
n
g
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e

	
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
_
u
p
d
a
t
e
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
(
)

	
	
{

	
	
i
f
 
(
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
 
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d
 
n
o
t
 
s
e
t
.
"
)
;

	
	
	
}

	
	

	
	
i
f
 
(
 
$
t
h
i
s
-
>
a
b
b
v
 
=
=
 
'
'
 
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
a
b
b
v
 
n
o
t
 
s
e
t
.
"
)
;

	
	
	
}

	
	

	
	
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
S
E
T
 

	
	
	
	
	
	
	
`
i
m
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
i
m
a
g
e
 
.
 
"
'
,

	
	
	
	
	
	
	
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
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
a
b
b
v
 
.
 
"
'
,

	
	
	
	
	
	
	
`
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
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
d
e
s
c
 
.
 
"
'
,

	
	
	
	
	
	
	
`
p
t
y
p
e
_
x
r
e
f
`
 
=
 
'
"
 
.
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
p
t
y
p
e
_
x
r
e
f
)
 
.
 
"
'
,

	
	
	
	
	
	
	
`
c
a
t
_
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
t
h
i
s
-
>
c
a
t
_
i
d
.
"
,

	
	
	
	
	
	
	
`
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
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
t
h
i
s
-
>
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
.
"

	
	
	
	
	
	
W
H
E
R
E
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
s
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
t
h
i
s
-
>
i
d
 
.
 
"
 

	
	
	
	
	
	
	
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
y
_
u
i
d
;

	
	

	
	
i
f
 
(
 
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
 
f
a
l
s
e
 
)
 
)

	
	
	
{

	
	
	
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

	
	
e
l
s
e

	
	
	
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
u
p
d
a
t
e
 
f
a
i
l
e
d
.
"
)
;

	
	
	
}

	
	
}

	

	
/
/
D
e
l
e
t
e
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e

	
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
(
 
$
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
i
d
s
)
 
|
|
 
e
m
p
t
y
(
$
i
d
s
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
 
"
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d
s
 
f
o
r
 
d
e
l
e
t
i
o
n
 
n
o
t
 
s
e
t
.
"
)
;

	
	
	
}

	
	

	
	
$
u
s
e
d
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
a
l
l
D
e
l
e
t
e
d
 
=
 
t
r
u
e
;

	
	
$
m
e
s
s
a
g
e
s
 
=
 
'
'
;


	
	
/
/
 
F
i
r
s
t
 
w
e
 
n
e
e
d
 
t
o
 
c
h
e
c
k
 
t
h
a
t
 
t
h
e
 
f
e
a
t
u
r
e
 
i
s
n
'
t
 
r
e
c
o
r
d
e
d
 
a
g
a
i
n
s
t
 
a
n
y
 
p
r
o
p
e
r
t
y
s
.
 
I
f
 
i
t
 
i
s
,
 
w
e
 
c
a
n
'
t
 
m
o
v
e
 
f
o
r
w
a
r
d

	
	
/
/
T
O
D
O
:
 
d
o
 
s
o
m
e
t
h
i
n
g
 
b
e
t
t
e
r
 
w
i
t
h
 
t
h
i
s
.
.
t
o
o
 
r
e
s
o
u
r
c
e
 
i
n
t
e
n
s
i
v
e
 
o
n
 
s
i
t
e
s
 
w
i
t
h
 
l
o
t
s
 
o
f
 
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

	
	
/
/
g
e
t
 
a
l
l
 
u
s
e
d
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
d
s

	
	
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
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
p
r
o
p
e
r
t
y
s
 
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
f
e
a
t
u
r
e
s
`
 
!
=
 
'
'
 
"
;

	
	
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
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
F
e
a
t
u
r
e
s
L
i
s
t
 
a
s
 
$
r
 
)

	
	
	
{

	
	
	
$
f
e
a
t
u
r
e
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
 
"
,
"
,
 
(
 
$
r
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
f
e
a
t
u
r
e
s
 
)
 
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
f
e
a
t
u
r
e
s
A
r
r
a
y
 
a
s
 
$
f
)

	
	
	
	
{

	
	
	
	
$
u
s
e
d
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
[
]
 
=
 
$
f
;
 

	
	
	
	
}

	
	
	
}

	
	

	
	
a
r
r
a
y
_
u
n
i
q
u
e
(
 
$
u
s
e
d
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
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
i
d
s
 
a
s
 
$
i
d
 
)

	
	
	
{

	
	
	
$
s
a
f
e
T
o
D
e
l
e
t
e
 
=
 
t
r
u
e
;

	
	
	

	
	
	
i
f
 
(
 
i
n
_
a
r
r
a
y
(
 
$
i
d
,
 
$
u
s
e
d
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
)
 
)

	
	
	
	
{

	
	
	
	
$
s
a
f
e
T
o
D
e
l
e
t
e
 
=
 
f
a
l
s
e
;

	
	
	
	
$
a
l
l
D
e
l
e
t
e
d
 
 
 
=
 
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
$
s
a
f
e
T
o
D
e
l
e
t
e
 
)

	
	
	
	
{

	
	
	
	
$
m
e
s
s
a
g
e
s
 
.
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
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
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
f
a
l
s
e
 
)
 
.
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
U
i
d
 
.
 
"
:
 
<
b
r
>
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
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
W
H
E
R
E
 
`
h
o
t
e
l
_
f
e
a
t
u
r
e
s
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
i
d
;

	
	
	
	
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
 
'
'
 
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
 
"
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
w
i
t
h
 
i
d
 
"
.
 
(
i
n
t
)
$
i
d
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	

	
	
r
e
t
u
r
n
 
$
m
e
s
s
a
g
e
s
;

	
	
}

	

	
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
a
l
l
_
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
_
i
m
a
g
e
s
(
)

	
	
{

	
	
$
i
m
a
g
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
'
p
f
e
a
t
u
r
e
s
'
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
p
f
e
a
t
u
r
e
s
'
]
 
a
s
 
$
i
m
a
g
e
)
 

	
	
	
{

	
	
	
$
r
 
=
 
a
r
r
a
y
(
)
;

	
	
	

	
	
	
$
r
[
 
'
I
M
A
G
E
_
F
I
L
E
N
A
M
E
'
 
]
 
=
 
s
u
b
s
t
r
(
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
,
 
s
t
r
r
p
o
s
(
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
,
 
'
/
'
)
 
+
 
1
)
;

	
	
	
$
r
[
 
'
I
M
A
G
E
_
S
R
C
'
 
]
 
 
=
 
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
;

	
	
	

	
	
	
$
i
m
a
g
e
s
[
]
 
=
 
$
r
;

	
	
	
}


	
	
r
e
t
u
r
n
 
$
i
m
a
g
e
s
;

	
	
}

	
}

