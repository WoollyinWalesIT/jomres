
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
s
3
i
m
p
o
r
t

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
f
o
r
c
e
 
=
 
(
i
n
t
)
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
f
o
r
c
e
'
,
 
0
)
;

	
	

	
	
/
/
p
r
e
l
i
m
i
n
a
r
y
 
c
h
e
c
k
s

	
	
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
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
]
 
=
=
 
'
0
'
 
|
|

	
	
	
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
a
m
a
z
o
n
_
s
3
_
a
c
t
i
v
e
'
]
 
!
=
 
'
1
'
 
|
|
 

	
	
	
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
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
]
 
=
=
 
'
'
 
|
|
 

	
	
	
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
a
m
a
z
o
n
_
s
3
_
k
e
y
'
]
 
=
=
 
'
'
 
|
|

	
	
	
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
a
m
a
z
o
n
_
s
3
_
s
e
c
r
e
t
'
]
 
=
=
 
'
'

	
	
	
)
 
{

	
	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
)
,
 
'
'
)
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
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
s
3
'
]
 
!
=
 
'
0
'
 
&
&
 
!
$
f
o
r
c
e
)
 
{

	
	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
)
,
 
'
'
)
;

	
	
}

	
	

	
	
/
/
s
e
t
 
m
a
x
 
e
x
e
c
u
t
i
o
n
 
t
i
m
e
.
 
I
f
 
n
o
t
 
p
o
s
s
i
b
l
e
,
 
d
o
n
`
t
 
r
u
n
 
t
h
e
 
i
m
p
o
r
t
 
b
e
c
a
u
s
e
 
m
o
s
t
 
p
r
o
b
a
b
l
y
 
i
t
 
w
i
l
l
 
t
i
m
e
 
o
u
t

	
	
t
r
y
 
{

	
	
	
i
n
i
_
s
e
t
(
'
m
a
x
_
e
x
e
c
u
t
i
o
n
_
t
i
m
e
'
,
 
'
0
'
)
;

	
	
}
 

	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

	
	
	
e
c
h
o
 
'

	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
 
a
l
e
r
t
-
d
a
n
g
e
r
"
>

	
	
	
	
<
h
4
 
c
l
a
s
s
=
"
a
l
e
r
t
-
h
e
a
d
i
n
g
"
>
E
R
R
O
R
<
/
h
4
>

	
	
	
	
<
p
>
E
r
r
o
r
:
 
C
a
n
`
t
 
s
e
t
 
m
a
x
_
e
x
e
c
u
t
i
o
n
_
t
i
m
e
 
t
o
 
0
,
 
i
m
p
o
r
t
i
n
g
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
w
i
l
l
 
p
r
o
b
a
b
l
y
 
t
i
m
e
 
o
u
t
.
 
P
l
e
a
s
e
 
i
m
p
o
r
t
 
t
h
e
m
 
m
a
n
u
a
l
l
y
 
b
y
 
c
o
p
y
i
n
g
 
t
h
e
 
e
n
t
i
r
e
 
/
j
o
m
r
e
s
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
 
d
i
r
 
t
o
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
.
<
/
p
>

	
	
	
<
/
d
i
v
>

	
	
	
'
;

	
	
	
r
e
t
u
r
n
;

	
	
}

	
	

	
	
j
r
_
i
m
p
o
r
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
_
s
3
i
m
p
o
r
t
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
_
s
3
i
m
p
o
r
t
 
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
_
s
3
i
m
p
o
r
t
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
_
s
3
i
m
p
o
r
t
-
>
r
u
n
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
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
 
i
m
p
o
r
t
 
i
m
a
g
e
s
 
t
o
 
A
a
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
I
m
a
g
e
s
 
i
m
p
o
r
t
e
d
 
s
u
c
c
e
s
s
f
u
l
l
y
 
t
o
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
_
s
3
i
m
p
o
r
t
-
>
r
u
n
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'

	
	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
e
r
r
o
r
 
a
l
e
r
t
-
d
a
n
g
e
r
"
>

	
	
	
	
	
<
h
4
 
c
l
a
s
s
=
"
a
l
e
r
t
-
h
e
a
d
i
n
g
"
>
E
R
R
O
R
<
/
h
4
>

	
	
	
	
	
<
p
>
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
 
i
m
p
o
r
t
 
i
m
a
g
e
s
 
t
o
 
A
a
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
.
<
/
p
>

	
	
	
	
<
/
d
i
v
>

	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
	
/
/
m
a
r
k
 
a
s
 
i
m
p
o
r
t
e
d

	
	
	
	
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
'
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
s
3
'
,
'
1
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'

	
	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
"
>

	
	
	
	
	
<
h
4
 
c
l
a
s
s
=
"
a
l
e
r
t
-
h
e
a
d
i
n
g
"
>
C
o
n
g
r
a
t
u
l
a
t
i
o
n
s
!
<
/
h
4
>

	
	
	
	
	
<
p
>
I
m
a
g
e
s
 
i
m
p
o
r
t
e
d
 
s
u
c
c
e
s
s
f
u
l
l
y
 
t
o
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
.
<
/
p
>

	
	
	
	
<
/
d
i
v
>

	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
n
u
l
l
;

 
 
 
 
}

}

