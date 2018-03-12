
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
 
j
o
m
r
e
s
_
r
e
g
i
o
n
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
r
e
g
i
o
n
s
 
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
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
 
=
 
f
a
l
s
e
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
'
 
]
)
)
 
{

	
	
	
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
'
 
]
 
=
 
0
;

	
	
}

	
	

	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
 
=
 
(
b
o
o
l
)
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
'
 
]
;

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
g
e
t
_
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
r
e
g
i
o
n
s
(
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


	
/
/
g
e
t
 
a
l
l
 
r
e
g
i
o
n
s
 
u
s
e
d
 
b
y
 
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
,
 
n
o
 
n
e
e
d
 
t
o
 
g
e
t
 
a
l
l
 
o
t
h
e
r
s
 
a
t
 
t
h
i
s
 
p
o
i
n
t

 
 
 
 
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
r
e
g
i
o
n
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
r
e
g
i
o
n
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

	
	

	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
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
i
d
`
,
 
`
c
o
u
n
t
r
y
c
o
d
e
`
,
 
`
r
e
g
i
o
n
n
a
m
e
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
r
e
g
i
o
n
s
 
W
H
E
R
E
 
`
i
d
`
 
I
N
 
(
S
E
L
E
C
T
 
D
I
S
T
I
N
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
r
e
g
i
o
n
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
)
 
O
R
D
E
R
 
B
Y
 
`
c
o
u
n
t
r
y
c
o
d
e
`
,
`
r
e
g
i
o
n
n
a
m
e
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
!
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
e
g
i
o
n
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
r
e
g
i
o
n
-
>
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
'
i
d
'
 
=
>
 
$
r
e
g
i
o
n
-
>
i
d
,
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
c
o
u
n
t
r
y
c
o
d
e
,
 
'
r
e
g
i
o
n
n
a
m
e
'
 
=
>
 
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
R
E
G
I
O
N
S
_
'
.
$
r
e
g
i
o
n
-
>
i
d
,
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
r
e
g
i
o
n
-
>
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
'
i
d
'
 
=
>
 
$
r
e
g
i
o
n
-
>
i
d
,
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
c
o
u
n
t
r
y
c
o
d
e
,
 
'
r
e
g
i
o
n
n
a
m
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
)
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
u
n
s
e
t
(
$
r
e
s
u
l
t
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
g
e
t
 
a
l
l
 
r
e
g
i
o
n
s
,
 
u
s
e
d
 
o
n
l
y
 
w
h
e
n
 
w
e
 
n
e
e
d
 
t
o
 
g
e
t
 
a
l
l
 
r
e
g
i
o
n
s
 
f
r
o
m
 
d
b

 
 
 
 
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
a
l
l
_
r
e
g
i
o
n
s
(
)

 
 
 
 
{

	
	
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
L
L
_
R
E
G
I
O
N
S
_
S
E
T
'
)
)
 
{

	
	
	
d
e
f
i
n
e
(
'
A
L
L
_
R
E
G
I
O
N
S
_
S
E
T
'
,
 
1
)
;

	
	
}
 
e
l
s
e
 
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


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
g
i
o
n
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
i
d
`
,
 
`
c
o
u
n
t
r
y
c
o
d
e
`
,
 
`
r
e
g
i
o
n
n
a
m
e
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
r
e
g
i
o
n
s
 
O
R
D
E
R
 
B
Y
 
`
c
o
u
n
t
r
y
c
o
d
e
`
,
`
r
e
g
i
o
n
n
a
m
e
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
!
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
e
g
i
o
n
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
r
e
g
i
o
n
-
>
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
'
i
d
'
 
=
>
 
$
r
e
g
i
o
n
-
>
i
d
,
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
c
o
u
n
t
r
y
c
o
d
e
,
 
'
r
e
g
i
o
n
n
a
m
e
'
 
=
>
 
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
R
E
G
I
O
N
S
_
'
.
$
r
e
g
i
o
n
-
>
i
d
,
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
r
e
g
i
o
n
-
>
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
'
i
d
'
 
=
>
 
$
r
e
g
i
o
n
-
>
i
d
,
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
c
o
u
n
t
r
y
c
o
d
e
,
 
'
r
e
g
i
o
n
n
a
m
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
)
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
u
n
s
e
t
(
$
r
e
s
u
l
t
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
t
h
i
s
 
i
s
 
m
o
s
t
l
y
 
u
s
e
d
 
w
h
e
n
 
g
e
n
e
r
a
t
i
n
g
 
t
h
e
 
a
j
a
x
 
r
e
g
i
o
n
 
d
r
o
p
d
o
w
n

 
 
 
 
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
o
u
n
t
r
y
_
r
e
g
i
o
n
s
(
$
c
o
u
n
t
r
y
_
c
o
d
e
 
=
 
'
'
)

 
 
 
 
{

	
	
i
f
 
(
$
c
o
u
n
t
r
y
_
c
o
d
e
 
=
=
 
'
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
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
[
$
c
o
u
n
t
r
y
_
c
o
d
e
]
)
)
 
{

	
	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
[
$
c
o
u
n
t
r
y
_
c
o
d
e
]
;

	
	
}

	
	

	
	
$
t
h
i
s
-
>
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
[
$
c
o
u
n
t
r
y
_
c
o
d
e
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
i
d
`
,
 
`
r
e
g
i
o
n
n
a
m
e
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
r
e
g
i
o
n
s
 
W
H
E
R
E
 
`
c
o
u
n
t
r
y
c
o
d
e
`
 
=
 
'
$
c
o
u
n
t
r
y
_
c
o
d
e
'
 
O
R
D
E
R
 
B
Y
 
`
r
e
g
i
o
n
n
a
m
e
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
!
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
e
g
i
o
n
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
[
 
$
c
o
u
n
t
r
y
_
c
o
d
e
 
]
[
 
$
r
e
g
i
o
n
-
>
i
d
 
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
R
E
G
I
O
N
S
_
'
.
$
r
e
g
i
o
n
-
>
i
d
,
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
[
 
$
c
o
u
n
t
r
y
_
c
o
d
e
 
]
[
 
$
r
e
g
i
o
n
-
>
i
d
 
]
 
=
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
u
n
s
e
t
(
$
r
e
s
u
l
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
[
$
c
o
u
n
t
r
y
_
c
o
d
e
]
;

 
 
 
 
}


	
/
/
g
e
t
 
r
e
g
i
o
n
 
d
e
t
a
i
l
s
 
b
y
 
r
e
g
i
o
n
 
i
d

 
 
 
 
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
r
e
g
i
o
n
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
 
'
'
;

	
	
}


 
 
 
 
 
 
 
 
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
r
e
g
i
o
n
s
[
 
$
i
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
i
d
 
]
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
S
E
L
E
C
T
 
`
i
d
`
,
 
`
c
o
u
n
t
r
y
c
o
d
e
`
,
 
`
r
e
g
i
o
n
n
a
m
e
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
r
e
g
i
o
n
s
 
W
H
E
R
E
 
`
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
!
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
e
g
i
o
n
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
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
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
c
o
u
n
t
r
y
c
o
d
e
,
 
'
r
e
g
i
o
n
n
a
m
e
'
 
=
>
 
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
R
E
G
I
O
N
S
_
'
.
$
r
e
g
i
o
n
-
>
i
d
,
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
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
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
c
o
u
n
t
r
y
c
o
d
e
,
 
'
r
e
g
i
o
n
n
a
m
e
'
 
=
>
 
$
r
e
g
i
o
n
-
>
r
e
g
i
o
n
n
a
m
e
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
n
u
l
l
;

	
	
	
	
/
/
 
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
T
r
i
e
d
 
t
o
 
g
e
t
 
r
e
g
i
o
n
 
w
i
t
h
 
n
o
n
-
e
x
i
s
t
a
n
t
 
i
d
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
 
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
i
d
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	

	
/
/
g
e
t
 
r
e
g
i
o
n
 
n
a
m
e
 
b
y
 
r
e
g
i
o
n
 
i
d
,
 
m
o
s
t
l
y
 
u
s
e
d
 
w
h
e
n
 
w
e
 
n
e
e
d
 
t
o
 
d
i
s
p
l
a
y
 
a
 
r
e
g
i
o
n
 
n
a
m
e

 
 
 
 
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
r
e
g
i
o
n
_
n
a
m
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
 
'
'
;

	
	
}


 
 
 
 
 
 
 
 
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
r
e
g
i
o
n
s
[
 
$
i
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
r
e
g
i
o
n
s
[
 
$
i
d
 
]
[
'
r
e
g
i
o
n
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
$
r
e
g
i
o
n
_
d
e
t
a
i
l
s
 
=
 
$
t
h
i
s
-
>
g
e
t
_
r
e
g
i
o
n
(
$
i
d
)
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
r
e
g
i
o
n
_
d
e
t
a
i
l
s
[
'
r
e
g
i
o
n
n
a
m
e
'
]
)
)
 
{

	
	
	
	
r
e
t
u
r
n
 
$
r
e
g
i
o
n
_
d
e
t
a
i
l
s
[
'
r
e
g
i
o
n
n
a
m
e
'
]
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
/
/
 
C
a
n
'
t
 
t
h
r
o
w
 
a
n
 
e
r
r
o
r
 
h
e
r
e
,
 
u
s
e
r
s
 
w
i
t
h
 
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
i
e
s
 
w
i
t
h
 
i
n
c
o
r
r
e
c
t
 
r
e
g
i
o
n
s
 
(
 
o
f
t
e
n
 
b
e
c
a
u
s
e
 
s
i
t
e
 
a
d
m
i
n
 
h
a
s
 
d
e
l
e
t
e
d
 
r
e
g
i
o
n
s
 
)
 
w
i
l
l
 
c
a
u
s
e
 
a
 
f
a
t
a
l
 
e
r
r
o
r
.
 
I
n
s
t
e
a
d
 
w
e
'
l
l
 
r
e
t
u
r
n
 
n
u
l
l
 
a
n
d
 
g
i
v
e
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
 
o
p
t
i
o
n
 
t
o
 
u
n
p
u
b
l
i
s
h
 
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
y
 
i
n
s
t
e
a
d
.

	
	
	
	
r
e
t
u
r
n
 
n
u
l
l
;

	
	
	
	
/
/
 
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
T
r
i
e
d
 
t
o
 
g
e
t
 
r
e
g
i
o
n
 
w
i
t
h
 
n
o
n
-
e
x
i
s
t
a
n
t
 
i
d
'
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	

	
/
/
g
e
t
 
r
e
g
i
o
n
 
n
a
m
e
 
b
y
 
r
e
g
i
o
n
 
i
d
,
 
m
o
s
t
l
y
 
u
s
e
d
 
w
h
e
n
 
w
e
 
n
e
e
d
 
t
o
 
d
i
s
p
l
a
y
 
a
 
r
e
g
i
o
n
 
n
a
m
e

 
 
 
 
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
r
e
g
i
o
n
_
i
d
(
$
r
e
g
i
o
n
_
n
a
m
e
 
=
 
'
'
)

 
 
 
 
{

	
	
$
r
e
g
i
o
n
_
n
a
m
e
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
r
e
g
i
o
n
_
n
a
m
e
)
;


	
	
i
f
 
(
$
r
e
g
i
o
n
_
n
a
m
e
 
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
'
T
r
i
e
d
 
t
o
 
g
e
t
 
r
e
g
i
o
n
 
i
d
 
f
o
r
 
e
m
p
t
y
 
r
e
g
i
o
n
 
n
a
m
e
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
g
e
t
_
a
l
l
_
r
e
g
i
o
n
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
t
h
i
s
-
>
r
e
g
i
o
n
s
 
a
s
 
$
r
)
 
{

	
	
	
i
f
 
(
s
t
r
c
a
s
e
c
m
p
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
r
[
 
'
r
e
g
i
o
n
n
a
m
e
'
 
]
)
,
 
$
r
e
g
i
o
n
_
n
a
m
e
)
 
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
 
(
i
n
t
)
 
$
r
[
 
'
i
d
'
 
]
;

	
	
	
}

	
	
}

 
 
 
 
}

}

