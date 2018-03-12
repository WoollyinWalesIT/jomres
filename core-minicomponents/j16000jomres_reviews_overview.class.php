
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
1
6
0
0
0
j
o
m
r
e
s
_
r
e
v
i
e
w
s
_
o
v
e
r
v
i
e
w

{

 
 
 
 
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
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
t
V
a
l
s
 
=
 
'
'
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
(
i
n
t
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
u
s
e
_
r
e
v
i
e
w
s
'
]
 
!
=
 
1
)
 
{

	
	
	
r
e
t
u
r
n
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
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
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
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

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
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


	
	
/
/
r
e
v
i
e
w
s

	
	
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
 
C
O
U
N
T
(
`
r
a
t
i
n
g
_
i
d
`
)
 
A
S
 
r
e
v
i
e
w
s
_
c
o
u
n
t
 
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
v
i
e
w
s
_
r
a
t
i
n
g
s
'
;

	
	
$
r
e
v
i
e
w
s
_
c
o
u
n
t
 
=
 
(
i
n
t
)
 
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
,
 
1
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
 
C
O
U
N
T
(
`
r
e
p
o
r
t
_
i
d
`
)
 
A
S
 
r
e
p
o
r
t
_
c
o
u
n
t
 
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
v
i
e
w
s
_
r
e
p
o
r
t
s
'
;

	
	
$
r
e
p
o
r
t
_
c
o
u
n
t
 
=
 
(
i
n
t
)
 
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
,
 
1
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
 
C
O
U
N
T
(
`
r
a
t
i
n
g
_
i
d
`
)
 
A
S
 
u
n
p
u
b
l
i
s
h
e
d
_
c
o
u
n
t
 
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
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
`
p
u
b
l
i
s
h
e
d
`
 
=
 
0
 
'
;

	
	
$
u
n
p
u
b
l
i
s
h
e
d
_
c
o
u
n
t
 
=
 
(
i
n
t
)
 
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
,
 
1
)
;

	
	

	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
R
E
V
I
E
W
S
'
]
 
=
 
$
r
e
v
i
e
w
s
_
c
o
u
n
t
;

	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
R
E
V
I
E
W
S
_
L
A
B
E
L
_
C
L
A
S
S
'
]
 
=
 
'
l
a
b
e
l
-
b
l
u
e
'
;

	
	

	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
U
N
P
U
B
L
I
S
H
E
D
_
R
E
V
I
E
W
S
'
]
 
=
 
$
u
n
p
u
b
l
i
s
h
e
d
_
c
o
u
n
t
;

	
	
i
f
 
(
$
u
n
p
u
b
l
i
s
h
e
d
_
c
o
u
n
t
 
>
 
0
)
 
{

	
	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
U
N
P
U
B
L
I
S
H
E
D
_
R
E
V
I
E
W
S
_
L
A
B
E
L
_
C
L
A
S
S
'
]
 
=
 
'
l
a
b
e
l
-
o
r
a
n
g
e
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
U
N
P
U
B
L
I
S
H
E
D
_
R
E
V
I
E
W
S
_
L
A
B
E
L
_
C
L
A
S
S
'
]
 
=
 
'
l
a
b
e
l
-
g
r
e
e
n
'
;

	
	
}

	
	

	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
R
E
V
I
E
W
_
R
E
P
O
R
T
S
'
]
 
=
 
$
r
e
p
o
r
t
_
c
o
u
n
t
;

	
	
i
f
 
(
$
r
e
p
o
r
t
_
c
o
u
n
t
 
>
 
0
)
 
{

	
	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
R
E
V
I
E
W
_
R
E
P
O
R
T
S
_
L
A
B
E
L
_
C
L
A
S
S
'
]
 
=
 
'
l
a
b
e
l
-
o
r
a
n
g
e
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
'
T
O
T
A
L
_
R
E
V
I
E
W
_
R
E
P
O
R
T
S
_
L
A
B
E
L
_
C
L
A
S
S
'
]
 
=
 
'
l
a
b
e
l
-
g
r
e
e
n
'
;

	
	
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
j
o
m
r
e
s
_
r
e
v
i
e
w
s
_
o
v
e
r
v
i
e
w
.
h
t
m
l
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
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
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
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
R
e
t
V
a
l
s
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
r
e
t
V
a
l
s
;

 
 
 
 
}

}

