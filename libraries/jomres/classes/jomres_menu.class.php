
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
m
e
n
u

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

	
	
/
/
f
r
o
n
t
e
n
d
 
m
e
n
u

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
c
t
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
t
h
i
s
-
>
i
t
e
m
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
n
u
 
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
a
d
m
i
n
 
m
e
n
u

	
	
$
t
h
i
s
-
>
a
d
m
i
n
_
s
e
c
t
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
t
h
i
s
-
>
a
d
m
i
n
_
i
t
e
m
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
a
d
m
i
n
_
m
e
n
u
 
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
 
a
d
d
_
s
e
c
t
i
o
n
(
$
s
e
c
t
i
o
n
_
i
d
 
=
 
1
,
 
$
t
i
t
l
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
t
i
t
l
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

	
	

	
	
$
t
h
i
s
-
>
s
e
c
t
i
o
n
s
[
$
s
e
c
t
i
o
n
_
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
t
i
t
l
e
'
 
=
>
 
$
t
i
t
l
e

	
	
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
 
a
d
d
_
a
d
m
i
n
_
s
e
c
t
i
o
n
(
$
s
e
c
t
i
o
n
_
i
d
 
=
 
1
,
 
$
t
i
t
l
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
t
i
t
l
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

	
	

	
	
$
t
h
i
s
-
>
a
d
m
i
n
_
s
e
c
t
i
o
n
s
[
$
s
e
c
t
i
o
n
_
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
t
i
t
l
e
'
 
=
>
 
$
t
i
t
l
e

	
	
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
*
 

	
C
o
r
e
 
f
r
o
n
t
e
n
d
 
s
e
c
t
i
o
n
s

	
1
 
=
>
 
'
D
a
s
h
b
o
a
r
d
'
;

	
1
0
 
=
>
 
'
A
c
c
o
u
n
t
'
;

	
2
0
 
=
>
 
'
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

	
3
0
 
=
>
 
'
B
o
o
k
i
n
g
s
'

	
4
0
 
=
>
 
'
G
u
e
s
t
s
'

	
5
0
 
=
>
 
'
I
n
v
o
i
c
e
s
'

	
6
0
 
=
>
 
'
R
e
p
o
r
t
s
'

	
7
0
 
=
>
 
'
M
i
s
c
'

	
8
0
 
=
>
 
'
S
e
t
t
i
n
g
s
'

	
9
0
 
=
>
 
'
H
e
l
p
'

	
*
/

	
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
 
a
d
d
_
i
t
e
m
(
$
s
e
c
t
i
o
n
_
i
d
 
=
 
7
0
,
 
$
t
i
t
l
e
 
=
 
'
'
,
 
$
t
a
s
k
 
=
 
'
'
,
 
$
i
c
o
n
 
=
 
'
f
a
-
c
o
g
'
,
 
$
i
s
_
u
r
l
 
=
 
f
a
l
s
e
,
 
$
e
x
t
e
r
n
a
l
 
=
 
f
a
l
s
e
,
 
$
d
i
s
a
b
l
e
d
 
=
 
f
a
l
s
e
)

	
{

	
	
i
f
 
(
$
t
i
t
l
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
(
i
n
t
)
$
s
e
c
t
i
o
n
_
i
d
 
=
=
 
0
)
 
{

	
	
	
$
s
e
c
t
i
o
n
_
i
d
 
=
 
7
0
;
 
/
/
w
e
`
l
l
 
p
l
a
c
e
 
m
e
n
u
 
i
t
e
m
s
 
t
h
a
t
 
d
o
n
`
t
 
h
a
v
e
 
a
 
s
e
c
t
i
o
n
 
i
d
 
i
n
 
t
h
e
 
M
i
s
c
 
c
o
r
e
 
s
e
c
t
i
o
n

	
	
}


	
	
i
f
 
(
$
t
a
s
k
 
=
=
 
'
'
)
 
{

	
	
	
$
t
a
s
k
 
=
 
'
b
l
a
n
k
'
;

	
	
	

	
	
	
/
/
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
 
t
h
e
 
b
l
a
n
k
 
t
a
s
k
 
d
e
f
i
n
e
d
 
(
c
p
a
n
e
l
 
f
r
o
n
t
p
a
g
e
)
,
 
s
o
 
w
e
 
w
o
n
`
t
 
s
e
t
 
i
t
 
a
g
a
i
n

	
	
	
/
/
t
h
i
s
 
a
l
s
o
 
m
a
k
e
s
 
s
u
r
e
 
t
h
a
t
 
p
l
u
g
i
n
s
 
c
a
n
`
t
 
o
v
e
r
r
i
d
e
 
t
h
i
s
 
b
y
 
m
i
s
t
a
k
e

	
	
	
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
i
t
e
m
s
[
$
t
a
s
k
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
 
t
r
u
e
;

	
	
	
}

	
	
}


	
	
/
/
c
h
e
c
k
 
i
f
 
t
h
i
s
 
u
s
e
r
 
c
a
n
 
a
c
c
e
s
s
 
t
h
i
s
 
t
a
s
k

	
	
i
f
 
(
!
$
e
x
t
e
r
n
a
l
)
 
{

	
	
	
$
t
a
s
k
_
n
a
m
e
 
=
 
'
'
;


	
	
	
i
f
 
(
$
i
s
_
u
r
l
)
 
{

	
	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
p
a
r
s
e
_
u
r
l
(
$
t
a
s
k
,
 
P
H
P
_
U
R
L
_
Q
U
E
R
Y
)
;

	
	
	
	
p
a
r
s
e
_
s
t
r
(
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
$
q
u
e
r
y
_
p
a
r
a
m
s
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
q
u
e
r
y
_
p
a
r
a
m
s
[
'
t
a
s
k
'
]
)
)
 
{

	
	
	
	
	
$
t
a
s
k
_
n
a
m
e
 
=
 
$
q
u
e
r
y
_
p
a
r
a
m
s
[
'
t
a
s
k
'
]
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
a
s
k
_
n
a
m
e
 
=
 
$
t
a
s
k
;

	
	
	
}


	
	
	
$
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
'
)
;

	
	
	

	
	
	
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
t
h
i
s
_
u
s
e
r
_
c
a
n
(
$
t
a
s
k
_
n
a
m
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
 
f
a
l
s
e
;

	
	
	
}

	
	
}

	
	

	
	
/
/
a
d
d
 
m
e
n
u
 
i
t
e
m

	
	
$
t
h
i
s
-
>
i
t
e
m
s
[
$
t
a
s
k
]
 
=
 
a
r
r
a
y
(

	
	
	
'
s
e
c
t
i
o
n
_
i
d
'
 
=
>
 
$
s
e
c
t
i
o
n
_
i
d
,

	
	
	
'
t
i
t
l
e
'
 
=
>
 
$
t
i
t
l
e
,

	
	
	
'
i
c
o
n
'
 
=
>
 
$
i
c
o
n
,

	
	
	
'
i
s
_
u
r
l
'
 
=
>
 
$
i
s
_
u
r
l
,

	
	
	
'
e
x
t
e
r
n
a
l
'
 
=
>
 
$
e
x
t
e
r
n
a
l
,
 

	
	
	
'
d
i
s
a
b
l
e
d
'
 
=
>
 
$
d
i
s
a
b
l
e
d

	
	
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
*
 

	
C
o
r
e
 
a
d
m
i
n
 
s
e
c
t
i
o
n
s

	
1
 
=
>
 
'
D
a
s
h
b
o
a
r
d
'
;

	
1
0
 
=
>
 
'
U
s
e
r
s
'
;

	
2
0
 
=
>
 
'
C
o
m
m
i
s
s
i
o
n
'

	
3
0
 
=
>
 
'
S
u
b
s
c
r
i
p
t
i
o
n
s
'

	
4
0
 
=
>
 
'
I
n
v
o
i
c
e
s
'

	
5
0
 
=
>
 
'
P
o
r
t
a
l
'

	
6
0
 
=
>
 
'
T
r
a
n
s
l
a
t
i
o
n
s
'

	
7
0
 
=
>
 
'
T
o
o
l
s
'

	
8
0
 
=
>
 
'
R
e
p
o
r
t
s
'

	
9
0
 
=
>
 
'
S
e
t
t
i
n
g
s
'

	
1
0
0
 
=
>
 
'
H
e
l
p
'
 

	
*
/

	
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
 
a
d
d
_
a
d
m
i
n
_
i
t
e
m
(
$
s
e
c
t
i
o
n
_
i
d
 
=
 
7
0
,
 
$
t
i
t
l
e
 
=
 
'
'
,
 
$
t
a
s
k
 
=
 
'
'
,
 
$
i
c
o
n
 
=
 
'
f
a
-
c
o
g
'
,
 
$
i
s
_
u
r
l
 
=
 
f
a
l
s
e
,
 
$
e
x
t
e
r
n
a
l
 
=
 
f
a
l
s
e
,
 
$
d
i
s
a
b
l
e
d
 
=
 
f
a
l
s
e
)

	
{

	
	
i
f
 
(
$
t
i
t
l
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
(
i
n
t
)
$
s
e
c
t
i
o
n
_
i
d
 
=
=
 
0
)
 
{

	
	
	
$
s
e
c
t
i
o
n
_
i
d
 
=
 
7
0
;
 
/
/
w
e
`
l
l
 
p
l
a
c
e
 
m
e
n
u
 
i
t
e
m
s
 
t
h
a
t
 
d
o
n
`
t
 
h
a
v
e
 
a
 
s
e
c
t
i
o
n
 
i
d
 
i
n
 
t
h
e
 
T
o
o
l
s
 
c
o
r
e
 
s
e
c
t
i
o
n

	
	
}

	
	

	
	
i
f
 
(
$
t
a
s
k
 
=
=
 
'
'
)
 
{

	
	
	
$
t
a
s
k
 
=
 
'
b
l
a
n
k
'
;

	
	
	

	
	
	
/
/
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
 
t
h
e
 
b
l
a
n
k
 
t
a
s
k
 
d
e
f
i
n
e
d
 
(
c
p
a
n
e
l
 
f
r
o
n
t
p
a
g
e
)
,
 
s
o
 
w
e
 
w
o
n
`
t
 
s
e
t
 
i
t
 
a
g
a
i
n

	
	
	
/
/
t
h
i
s
 
a
l
s
o
 
m
a
k
e
s
 
s
u
r
e
 
t
h
a
t
 
p
l
u
g
i
n
s
 
c
a
n
`
t
 
o
v
e
r
r
i
d
e
 
t
h
i
s
 
b
y
 
m
i
s
t
a
k
e

	
	
	
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
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
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
 
t
r
u
e
;

	
	
	
}

	
	
}

	
	

	
	
/
/
a
d
d
 
a
d
m
i
n
 
m
e
n
u
 
i
t
e
m

	
	
$
t
h
i
s
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
 
=
 
a
r
r
a
y
(

	
	
	
'
s
e
c
t
i
o
n
_
i
d
'
 
=
>
 
$
s
e
c
t
i
o
n
_
i
d
,

	
	
	
'
t
i
t
l
e
'
 
=
>
 
$
t
i
t
l
e
,

	
	
	
'
i
c
o
n
'
 
=
>
 
$
i
c
o
n
,
 

	
	
	
'
e
x
t
e
r
n
a
l
'
 
=
>
 
$
e
x
t
e
r
n
a
l
,

	
	
	
'
i
s
_
u
r
l
'
 
=
>
 
$
i
s
_
u
r
l
,

	
	
	
'
d
i
s
a
b
l
e
d
'
 
=
>
 
$
d
i
s
a
b
l
e
d

	
	
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
n
e
r
a
t
e
 
f
r
o
n
t
e
n
d
 
c
p
a
n
e
l
 
m
e
n
u

	
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
n
e
r
a
t
e
_
m
e
n
u
(
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
t
h
i
s
-
>
s
e
c
t
i
o
n
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
t
h
i
s
-
>
i
t
e
m
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
t
h
i
s
-
>
i
t
e
m
s
 
a
s
 
$
t
a
s
k
 
=
>
 
$
p
a
r
a
m
s
)
 
{

	
	
	
$
s
e
c
t
i
o
n
_
i
d
 
=
 
$
p
a
r
a
m
s
[
'
s
e
c
t
i
o
n
_
i
d
'
]
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
s
e
c
t
i
o
n
s
[
$
s
e
c
t
i
o
n
_
i
d
]
)
)
 
{

	
	
	
	
$
s
e
c
t
i
o
n
_
i
d
 
=
 
7
0
;
 
/
/
s
e
c
t
i
o
n
 
n
o
t
 
d
e
f
i
n
e
d
,
 
s
o
 
d
e
f
a
u
l
t
 
t
o
 
m
i
s
c

	
	
	
}

	
	
	

	
	
	
$
t
h
i
s
-
>
m
e
n
u
[
$
s
e
c
t
i
o
n
_
i
d
]
[
]
 
=
 
$
t
a
s
k
;

	
	
}

	
	

	
	
k
s
o
r
t
(
$
t
h
i
s
-
>
m
e
n
u
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
n
e
r
a
t
e
 
a
d
m
i
n
 
c
p
a
n
e
l
 
m
e
n
u

	
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
n
e
r
a
t
e
_
a
d
m
i
n
_
m
e
n
u
(
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
t
h
i
s
-
>
a
d
m
i
n
_
s
e
c
t
i
o
n
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
t
h
i
s
-
>
a
d
m
i
n
_
i
t
e
m
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
t
h
i
s
-
>
a
d
m
i
n
_
i
t
e
m
s
 
a
s
 
$
t
a
s
k
 
=
>
 
$
p
a
r
a
m
s
)
 
{

	
	
	
$
s
e
c
t
i
o
n
_
i
d
 
=
 
$
p
a
r
a
m
s
[
'
s
e
c
t
i
o
n
_
i
d
'
]
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
d
m
i
n
_
s
e
c
t
i
o
n
s
[
$
s
e
c
t
i
o
n
_
i
d
]
)
)
 
{

	
	
	
	
$
s
e
c
t
i
o
n
_
i
d
 
=
 
7
0
;
 
/
/
s
e
c
t
i
o
n
 
n
o
t
 
d
e
f
i
n
e
d
,
 
s
o
 
d
e
f
a
u
l
t
 
t
o
 
m
i
s
c

	
	
	
}

	
	
	

	
	
	
$
t
h
i
s
-
>
a
d
m
i
n
_
m
e
n
u
[
$
s
e
c
t
i
o
n
_
i
d
]
[
]
 
=
 
$
t
a
s
k
;

	
	
}

	
	

	
	
k
s
o
r
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
d
m
i
n
_
m
e
n
u
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

