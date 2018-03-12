
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


/
/
 
A
 
c
l
a
s
s
 
f
o
r
 
p
r
o
v
i
d
i
n
g
 
f
e
e
d
b
a
c
k
 
t
o
 
a
l
l
 
u
s
e
r
s

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
u
s
e
r
_
f
e
e
d
b
a
c
k

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
u
s
e
r
_
f
e
e
d
b
a
c
k
_
m
e
s
s
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
t
h
i
s
-
>
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
 
g
e
t
_
m
e
s
s
a
g
e
s
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
u
s
e
r
_
f
e
e
d
b
a
c
k
_
m
e
s
s
a
g
e
s
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
t
h
i
s
-
>
u
s
e
r
_
f
e
e
d
b
a
c
k
_
m
e
s
s
a
g
e
s
 
a
s
 
$
m
e
s
s
a
g
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
 
$
m
e
s
s
a
g
e
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
 
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
$
m
e
s
s
a
g
e
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
m
e
s
s
a
g
e
_
a
r
r
a
y
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


 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
 
=
 
'
'
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
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
l
i
n
k
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
L
I
N
K
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
l
i
n
k
'
]
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
B
U
T
T
O
N
_
T
E
X
T
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
b
u
t
t
o
n
_
t
e
x
t
'
]
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
F
R
O
N
T
E
N
D
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
u
s
e
r
_
f
e
e
d
b
a
c
k
_
b
u
t
t
o
n
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
 
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
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
m
e
s
s
a
g
e
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
[
'
M
E
S
S
A
G
E
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
m
e
s
s
a
g
e
'
]
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
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
c
s
s
_
c
l
a
s
s
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
[
'
C
S
S
_
C
L
A
S
S
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
c
s
s
_
c
l
a
s
s
'
]
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
A
C
T
I
O
N
_
L
I
N
K
'
]
 
=
 
$
b
u
t
t
o
n
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
F
R
O
N
T
E
N
D
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
u
s
e
r
_
f
e
e
d
b
a
c
k
_
p
a
n
e
.
h
t
m
l
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
u
s
e
r
_
f
e
e
d
b
a
c
k
_
m
e
s
s
a
g
e
s
[
]
 
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

