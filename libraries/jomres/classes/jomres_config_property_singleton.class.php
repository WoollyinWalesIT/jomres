
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
p
r
o
p
e
r
t
y
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


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
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
p
r
o
p
e
r
t
y
_
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
s
e
t
t
i
n
g
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

 
 
 
 
 
 
 
 

	
	
/
/
g
e
t
 
d
e
f
a
u
l
t
 
p
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
s

	
	
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
d
e
f
a
u
l
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
c
o
n
f
i
g
(
)
;

	
	

	
	
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
 
s
p
e
c
i
f
i
c
 
s
e
t
t
i
n
g
s

	
	
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
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
_
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
p
r
o
p
e
r
t
y
_
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
p
r
o
p
e
r
t
y
_
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
p
r
o
p
e
r
t
y
_
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
i
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
 
=
 
n
u
l
l
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
l
o
a
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
c
o
n
f
i
g
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
;

 
 
 
 
}


	
/
/
l
o
a
d
 
p
r
o
p
e
r
t
y
 
c
o
n
f
i
g
 
f
o
r
 
c
u
r
r
e
n
t
 
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
 
l
o
a
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
c
o
n
f
i
g
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
 
n
u
l
l
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
l
l
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
m
p
_
c
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
c
o
n
f
i
g
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
t
h
i
s
-
>
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
s
e
t
t
i
n
g
s
[
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
u
i
d
)
)
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
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
_
m
e
r
g
e
(
$
t
e
m
p
_
c
o
n
f
i
g
,
 
$
t
h
i
s
-
>
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
s
e
t
t
i
n
g
s
[
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
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
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
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
c
o
n
f
i
g
[
 
'
c
u
r
r
e
n
c
y
C
o
d
e
'
 
]
 
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
[
 
'
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
 
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
p
r
o
p
e
r
t
y
_
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
_
c
o
n
f
i
g
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
p
r
o
p
e
r
t
y
_
c
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
c
o
n
f
i
g
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
p
r
o
p
e
r
t
y
_
c
o
n
f
i
g
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
 
c
o
n
f
i
g
s
 
m
u
l
t
i

 
 
 
 
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
p
r
o
p
e
r
t
y
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
 
t
r
u
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
k
 
=
>
 
$
u
i
d
)
 
{

	
	
	
i
f
 
(
$
u
i
d
 
=
=
 
0
)
 
{

	
	
	
	
u
n
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
s
[
$
k
]
)
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
s
e
t
t
i
n
g
s
[
$
u
i
d
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
[
$
k
]
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
s
e
t
t
i
n
g
s
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
 
t
r
u
e
;
 
/
/
w
e
 
a
l
r
e
a
d
y
 
h
a
v
e
 
a
l
l
 
s
e
t
t
i
n
g
s
 
w
e
 
n
e
e
d

	
	
}


	
	
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
a
k
e
y
`
,
 
`
v
a
l
u
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
s
e
t
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
'
)
'
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
t
h
i
s
-
>
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
s
e
t
t
i
n
g
s
[
 
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
 
]
 
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

	
	
	
}

	
	
}

 
 
 
 
}

	

	
/
/
g
e
t
 
d
e
f
a
u
l
t
 
p
r
o
p
e
r
t
y
 
c
o
n
f
i
g

 
 
 
 
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
 
g
e
t
_
d
e
f
a
u
l
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
c
o
n
f
i
g
(
)

 
 
 
 
{

	
	
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
t
h
i
s
-
>
d
e
f
a
u
l
t
_
c
o
n
f
i
g
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


 
 
 
 
 
 
 
 
/
/
n
o
 
m
o
r
e
 
m
i
s
s
i
n
g
 
s
e
t
t
i
n
g
s

 
 
 
 
 
 
 
 
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
d
e
f
a
u
l
t
_
c
o
n
f
i
g
 
=
 
$
m
r
C
o
n
f
i
g
;

 
 
 
 
 
 
 
 
}

	
	

	
	
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
a
k
e
y
`
,
 
`
v
a
l
u
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
s
e
t
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
'
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
t
h
i
s
-
>
d
e
f
a
u
l
t
_
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
-
>
a
k
e
y
 
]
 
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

	
	
	
}

	
	
	

	
	
	
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
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
]
 
=
=
 
'
1
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
d
e
f
a
u
l
t
_
c
o
n
f
i
g
[
 
'
c
u
r
r
e
n
c
y
C
o
d
e
'
 
]
 
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
[
 
'
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

	
	
	
}

	
	
}

 
 
 
 
}

}

