
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

{

 
 
 
 
/
/
 
S
t
o
r
e
 
t
h
e
 
s
i
n
g
l
e
 
i
n
s
t
a
n
c
e
 
o
f
 
D
a
t
a
b
a
s
e

 
 
 
 
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
c
o
n
f
i
g
 
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
i
n
i
t
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
 
s
e
t
(
$
c
o
n
f
i
g
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
n
f
i
g
 
=
 
$
c
o
n
f
i
g
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
e
t
(
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
n
f
i
g
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
 
s
e
t
_
s
e
t
t
i
n
g
(
$
s
e
t
t
i
n
g
,
 
$
v
a
l
u
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
n
f
i
g
[
 
$
s
e
t
t
i
n
g
 
]
 
=
 
$
v
a
l
u
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
 
s
a
v
e
_
c
o
n
f
i
g
(
)

 
 
 
 
{

	
	
$
c
o
n
f
i
g
_
t
o
_
s
a
v
e
 
=
 
$
t
h
i
s
-
>
c
o
n
f
i
g
;

	
	

	
	
/
/
w
e
 
w
o
n
`
t
 
s
t
o
r
e
 
t
h
e
 
v
e
r
s
i
o
n
 
i
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
 
(
o
r
 
B
C
 
_
s
i
t
e
_
s
e
t
t
i
n
g
s
 
t
a
b
l
e
)
,
 
s
o
 
i
t
 
w
i
l
l
 
a
l
w
a
y
s
 
b
e
 
l
o
a
d
e
d
 
f
r
o
m
 
s
i
t
e
_
c
o
n
f
i
g
.
p
h
p

	
	
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
c
o
n
f
i
g
_
t
o
_
s
a
v
e
[
'
v
e
r
s
i
o
n
'
]
)
)
 
{

	
	
	
u
n
s
e
t
(
$
c
o
n
f
i
g
_
t
o
_
s
a
v
e
[
'
v
e
r
s
i
o
n
'
]
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


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
 
'
 
.
v
a
r
_
e
x
p
o
r
t
(
$
c
o
n
f
i
g
_
t
o
_
s
a
v
e
,
 
t
r
u
e
)
.
'
;

'
)
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
E
R
R
O
R
:
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
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

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
i
n
s
e
r
t
_
n
e
w
_
s
e
t
t
i
n
g
(
$
k
,
 
$
v
)

 
 
 
 
{

	
	
/
/
w
e
 
w
o
n
`
t
 
s
t
o
r
e
 
t
h
e
 
v
e
r
s
i
o
n
 
i
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
 
(
o
r
 
B
C
 
_
s
i
t
e
_
s
e
t
t
i
n
g
s
 
t
a
b
l
e
)
,
 
s
o
 
i
t
 
w
i
l
l
 
a
l
w
a
y
s
 
b
e
 
l
o
a
d
e
d
 
f
r
o
m
 
s
i
t
e
_
c
o
n
f
i
g
.
p
h
p

	
	
i
f
 
(
$
k
 
=
=
 
'
v
e
r
s
i
o
n
'
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
n
f
i
g
[
$
k
]
 
=
 
$
v
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


 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
$
k
,
 
$
j
r
C
o
n
f
i
g
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
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


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
 
'
 
.
v
a
r
_
e
x
p
o
r
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
,
 
t
r
u
e
)
.
'
;

'
)
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
E
R
R
O
R
:
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
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
n
f
i
g
[
$
k
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
b
 
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
d
a
t
a
b
a
s
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
$
k
,
 
$
t
h
i
s
-
>
c
o
n
f
i
g
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
s
i
t
e
_
s
e
t
t
i
n
g
s
 
(
a
k
e
y
,
v
a
l
u
e
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
k
.
"
'
,
'
"
.
$
v
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
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
d
b
-
>
q
u
e
r
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
o
n
f
i
g
[
$
k
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
$
k
,
 
$
v
)

 
 
 
 
{

	
	
/
/
w
e
 
w
o
n
`
t
 
s
t
o
r
e
 
t
h
e
 
v
e
r
s
i
o
n
 
i
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
 
(
o
r
 
B
C
 
_
s
i
t
e
_
s
e
t
t
i
n
g
s
 
t
a
b
l
e
)
,
 
s
o
 
i
t
 
w
i
l
l
 
a
l
w
a
y
s
 
b
e
 
l
o
a
d
e
d
 
f
r
o
m
 
s
i
t
e
_
c
o
n
f
i
g
.
p
h
p

	
	
i
f
 
(
$
k
 
=
=
 
'
v
e
r
s
i
o
n
'
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
n
f
i
g
[
$
k
]
 
=
 
$
v
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


 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
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
[
 
$
k
 
]
 
=
 
$
v
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


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
 
'
 
.
v
a
r
_
e
x
p
o
r
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
,
 
t
r
u
e
)
.
'
;

'
)
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
E
R
R
O
R
:
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
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
n
f
i
g
[
$
k
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
b
 
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
d
a
t
a
b
a
s
e
'
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
s
i
t
e
_
s
e
t
t
i
n
g
s
 
S
E
T
 
`
v
a
l
u
e
`
 
=
 
'
"
.
$
v
.
"
'
 
W
H
E
R
E
 
`
a
k
e
y
`
 
=
 
'
"
.
$
k
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
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
d
b
-
>
q
u
e
r
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
o
n
f
i
g
[
$
k
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
e
t
_
s
e
t
t
i
n
g
(
$
s
e
t
t
i
n
g
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
n
f
i
g
[
 
$
s
e
t
t
i
n
g
 
]
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
i
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
s
i
t
e
_
c
o
n
f
i
g
.
p
h
p
'
;

 
 
 
 
 
 
 
 
$
t
e
m
p
C
o
n
f
i
g
A
r
r
 
=
 
$
j
r
C
o
n
f
i
g
;


 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
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
n
f
i
g
 
=
 
$
j
r
C
o
n
f
i
g
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
e
m
p
C
o
n
f
i
g
A
r
r
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
$
k
,
 
$
t
h
i
s
-
>
c
o
n
f
i
g
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
i
n
s
e
r
t
_
n
e
w
_
s
e
t
t
i
n
g
(
$
k
,
 
$
v
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
 
/
/
B
C

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
f
i
g
 
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
 
'
S
E
L
E
C
T
 
a
k
e
y
,
v
a
l
u
e
 
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
s
i
t
e
_
s
e
t
t
i
n
g
s
'
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
b
y
p
a
s
s
 
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
 
d
o
e
s
 
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
 
t
o
o
,
 
a
n
d
 
t
h
a
t
'
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

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
b
 
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
d
a
t
a
b
a
s
e
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
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
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
d
b
-
>
l
o
a
d
O
b
j
e
c
t
L
i
s
t
(
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
j
o
m
r
e
s
_
d
b
-
>
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
j
o
m
r
e
s
_
d
b
-
>
r
e
s
u
l
t
 
a
s
 
$
s
e
t
t
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
k
e
y
 
=
 
$
s
e
t
t
i
n
g
-
>
a
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
s
e
t
t
i
n
g
-
>
v
a
l
u
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
n
f
i
g
[
 
$
a
k
e
y
 
]
 
=
 
$
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
N
o
w
 
w
e
'
l
l
 
c
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
a
n
y
 
n
e
w
 
s
e
t
t
i
n
g
s
 
h
a
v
e
 
b
e
e
n
 
a
d
d
e
d
 
t
o
 
t
h
e
 
j
r
C
o
n
f
i
g
 
f
i
l
e
.
 
I
f
 
t
h
e
y
 
h
a
v
e
 
t
h
e
y
'
l
l
 
b
e
 
a
d
d
e
d
 
t
o
 
t
h
e
 
s
i
t
e
 
s
e
t
t
i
n
g
s
 
t
a
b
l
e
.

 
 
 
 
 
 
 
 
 
 
 
 
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
j
o
m
r
e
s
_
d
b
-
>
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
j
o
m
r
e
s
C
o
n
f
i
g
_
d
b
p
r
e
f
i
x
 
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
d
b
p
r
e
f
i
x
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
C
o
n
f
i
g
_
d
b
 
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
d
b
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
J
o
m
r
e
s
 
p
r
o
b
a
b
l
y
 
h
a
s
n
'
t
 
b
e
e
n
 
i
n
s
t
a
l
l
e
d
 
y
e
t
,
 
d
o
e
s
 
t
h
e
 
s
i
t
e
 
s
e
t
t
i
n
g
s
 
t
a
b
l
e
 
e
x
i
s
t
 
y
e
t
?

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
H
O
W
 
T
A
B
L
E
S
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
j
o
m
r
e
s
_
d
b
-
>
l
o
a
d
O
b
j
e
c
t
L
i
s
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
i
n
g
 
=
 
'
T
a
b
l
e
s
_
i
n
_
'
.
$
j
o
m
r
e
s
C
o
n
f
i
g
_
d
b
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
r
-
>
$
s
t
r
i
n
g
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
d
b
p
r
e
f
i
x
.
'
j
o
m
r
e
s
_
s
i
t
e
_
s
e
t
t
i
n
g
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
l
e
s
F
o
u
n
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
a
b
l
e
s
F
o
u
n
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
 
s
i
t
e
 
s
e
t
t
i
n
g
s
 
t
a
b
l
e
 
d
o
e
s
n
'
t
 
e
x
i
s
t
 
y
e
t
,
 
w
e
'
l
l
 
d
u
m
p
 
o
u
t
 
f
o
r
 
n
o
w
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
w
e
`
r
e
 
i
n
s
t
a
l
l
i
n
g
 
J
o
m
r
e
s
 
f
o
r
 
t
h
e
 
f
i
r
s
t
 
t
i
m
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
f
i
g
 
=
 
$
t
e
m
p
C
o
n
f
i
g
A
r
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
c
r
e
a
t
e
s
 
n
e
w
 
s
e
t
t
i
n
g
s
 
i
n
 
t
h
e
 
s
i
t
e
 
s
e
t
t
i
n
g
s
 
a
c
c
o
r
d
i
n
g
 
t
o
 
a
n
y
 
n
e
w
 
o
p
t
i
o
n
s
 
a
d
d
e
d
 
t
o
 
s
i
t
e
_
c
o
n
f
i
g
.
p
h
p
.
 
U
s
u
a
l
l
y
,
 
t
h
i
s
 
i
s
 
d
o
n
e
 
o
n
 
i
n
s
t
a
l
l
 
b
u
t
 
c
h
a
n
g
i
n
g
 
t
h
e
 
f
i
l
e
 
a
n
d
 
a
d
d
i
n
g
 
a
 
n
e
w
 
i
n
d
e
x
 
t
o
 
t
h
e
 
j
r
C
o
n
f
i
g
 
a
r
r
a
y
 
w
o
u
l
d
 
r
e
s
u
l
t
 
i
n
 
t
h
a
t
 
i
n
d
e
x
 
b
e
i
n
g
 
a
d
d
e
d
 
t
o
 
t
h
e
 
t
a
b
l
e
.

 
 
 
 
 
 
 
 
 
 
 
 
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
e
m
p
C
o
n
f
i
g
A
r
r
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
$
k
,
 
$
t
h
i
s
-
>
c
o
n
f
i
g
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
i
n
s
e
r
t
_
n
e
w
_
s
e
t
t
i
n
g
(
$
k
,
 
$
v
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
 
t
r
u
e
;

 
 
 
 
}

}

